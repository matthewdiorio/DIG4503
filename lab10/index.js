import Express, {
    response
} from 'express'; //use express
import fs from 'fs'; // use filesystem
import cors from "cors";

const App = Express();
const port = 3010; // creating port 3010
App.use(cors());

let fileContents = fs.readFileSync("database.json");

let database = JSON.parse(fileContents);

App.use("/", Express.static("client/build"));

App.get("/ages/:number", (req, res) => { // getting employee by age
    let result = {
        "error": "not found"
    }

    database.forEach((value) => {
        if (req.params.number == value.age) {
            result = value;
        }
    });

    res.json(result);
})


App.get("/employees/:name", (req, res) => { // getting employee by name
    let result = {
        "error": "not found"
    }

    database.forEach((value) => {
        if (req.params.name == value.name) {
            result = value;
        }
    });

    res.json(result);
})

App.post("/employees/:name/:age/", (req, res) => {
    let result = {
        "name": req.params.name,
        "age": parseInt(req.params.age)
    };

    database.push(result)

    fs.writeFileSync("database.json", JSON.stringify(database, null, '\t'));

    res.json(result);
});
App.listen(port, () => {
    console.log("Server running") // if server is successfully running
})