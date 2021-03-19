import Express from 'express'; //use express
import fs from 'fs'; // use filesystem

const App = Express();
const port = 3010; // creating port 3010

let fileContents = fs.readFileSync("database.json");

let database = JSON.parse(fileContents);


App.get("/ages/:number", (req, res) => { // getting employee by age
    let result = {"error": "not found"}

    database.forEach((value) => {
        if(req.params.number == value.age) { 
            result = value;
        }
    });

    res.json(result);
})


App.get("/employees/:name", (req, res) => { // getting employee by name
    let result = {"error": "not found"}

    database.forEach((value) => {
        if(req.params.name == value.name) {
            result = value;
        }
    });

    res.json(result);
})


App.listen(port, () => {
    console.log("Server running") // if server is successfully running
})