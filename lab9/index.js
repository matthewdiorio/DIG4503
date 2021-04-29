import Express, {
    response
} from 'express'; //use express

import fs from 'fs'; // use filesystem
import chalk from 'chalk'; // importing chalk
import validator from "validator"; //importing validator
const App = Express();
const port = 3010; // creating port 3010

let fileContents = fs.readFileSync("database.json");

let database = JSON.parse(fileContents); // creating databavse

App.use("/", Express.static("public")); //root

App.get("/ages/:number", (req, res) => { // getting employee by age
    let result = {
        "error": "not found" // changing result to not found
    }
    if (validator.isNumeric(req.params.number)) { // checks if it is a number
        database.forEach((value) => { // looping through database
            if (req.params.number == value.age) { // if input matches an age
                result = value; // setting result 
            }
        });
    } else{ // not a number
        result = {
            "error": "only enter a number!"
        }
    }


    res.json(result);
})


App.get("/employees/:name", (req, res) => { // getting employee by name
    let result = {
        "error": "not found" //default value
    }

    database.forEach((value) => { //looping through database
        if (req.params.name == value.name) { // if input matches a name
            result = value; //dsiplaying result the value
        }
    });

    res.json(result);
})

App.post("/employees/:name/:age/", (req, res) => { //posting new employee
    let result = {
        "name": req.params.name,
        "age": parseInt(req.params.age)
    };

    database.push(result)

    fs.writeFileSync("database.json", JSON.stringify(database, null, '\t'));

    res.json(result);
});
App.listen(port, () => {
    console.log(chalk.blue("Server running")); // if server is successfully running changed to blue to seperate from green nodemon
})