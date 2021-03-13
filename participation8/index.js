import Express from 'express';
const App = Express();
const port = 3010;


App.get('/people/:id', (req, res) => {
    res.json({userid: req.params.id});
});

App.get('/addfour/:number', (req, res) => {
    if(!isNaN(req.params.number)){ // checks if request is a number
            let mathResult = parseInt(req.params.number) + 4 // does math
    res.send(req.params.number + " + 4 = " + mathResult); // sends result
    }
    else{ // request is not a number
        res.send(req.params.number + " is not a number. Please send a number.")
    }

});

App.listen(port, () => {

});