import Express from "express";

const App = Express();
const port = 45030;

const names = [
    'Cortney',
    'Dewayne',
    'Trenton',
    'Pamala',
    'Ettie',
    'Errol',
    'Lorrie',
    'Hang',
    'Lauryn',
    'Caterina',
    'Isa',
    'Marcela'
];

App.get('/people/:person', (req, res) =>{
    let person = req.params.person;
    if(names.includes(person)){ // if array names contains the request parameter
        res.json({name:person})
    } else { 
        res.json({name:"not found"});
    }
});

App.get('/search/:name', (req, res) => {
    const result = names.filter(str => str.includes(req.params.name));  // finds everything in names from request
    if(result != 0){ // if array is not empty
        res.json({ search: result});
    } else {
        res.json({ search: "not found"});
    }
});

App.listen(port, () => {

});