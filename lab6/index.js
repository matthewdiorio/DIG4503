const Express = require("express");
const App = Express();
const port = 3000;




App.get('/', function(request, response){ // on route directory
    response.send("Hello World!")
});

App.use('/public', Express.static('public'));

App.listen(port, function(){ // listens on port 3000
    console.log("Server running!")
})