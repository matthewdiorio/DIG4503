const axios = require("axios"); //including axios 

axios('https://pokeapi.co/api/v2/pokemon/charizard') //fetching charizard api

    .then(function (response) {  // getting the response
        const pokemon = response.data; //set pokemon to response data

        console.log("This is a " + pokemon.name + " and its ID is " + pokemon.id); //Prints out the pokemon name and ID from the API to the console

    })
    .catch(function (error){ //error handler
        console.log("Error: " + error); //prints out the error to the console
    });