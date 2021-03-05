const axios = require("axios"); //including axios 
const chalk = require('chalk'); //include chalk
axios('https://pokeapi.co/api/v2/pokemon/charizard') //fetching charizard api

    .then(function (response) {  // getting the response
        const pokemon = response.data; //set pokemon to response data
        // console.log(pokemon.types)
        console.log("This is a " + pokemon.name + " and its ID is " + pokemon.id); //Prints out the pokemon name and ID from the API to the console
        listTypes(pokemon.types) // print types
    })
    .catch(function (error){ //error handler
        console.log("Error: " + error); //prints out the error to the console
    });


function listTypes(types){ // function to print types to console
    console.log('Types:')  // prints  types
    for(type in types){ // looping through the types and printing to console using chalk to match related color
        if(types[type].type.name=='fire'){
            console.log(chalk.hex('#F08030')('fire'));
        }
        if(types[type].type.name=='grass'){
            console.log(chalk.hex('#78C850')('grass'));
        }
        if(types[type].type.name=='ice'){
            console.log(chalk.hex('#98D8D8')('ice'));
        }
        if(types[type].type.name=='poison'){
            console.log(chalk.hex('#A040A0')('poison'));
        }
        if(types[type].type.name=='flying'){
            console.log(chalk.hex('#A890F0')('flying'));
        }
        if(types[type].type.name=='bug'){
            console.log(chalk.hex('#A8B820')('bug'));
        }
        if(types[type].type.name=='ghost'){
            console.log(chalk.hex('#705898')('ghost'));
        }
        if(types[type].type.name=='dragon'){
            console.log(chalk.hex('#7038F8')('dragon'));
        }
        if(types[type].type.name=='fairy'){
            console.log(chalk.hex('#F0B6BC')('fairy'));
        }
        if(types[type].type.name=='normal'){
            console.log(chalk.hex('#A8A878')('normal'));
        }
        if(types[type].type.name=='water'){
            console.log(chalk.hex('#6890F0')('water'));
        }
        if(types[type].type.name=='electric'){
            console.log(chalk.hex('#F8D030')('electric'));
        }
        if(types[type].type.name=='fighting'){
            console.log(chalk.hex('#C03028')('fighting'));
        }
        if(types[type].type.name=='ground'){
            console.log(chalk.hex('#E0C068')('ground'));
        }
        if(types[type].type.name=='psychic'){
            console.log(chalk.hex('#F85888')('psychic'));
        }
        if(types[type].type.name=='rock'){
            console.log(chalk.hex('#B8A038')('rock'));
        }
        if(types[type].type.name=='dark'){
            console.log(chalk.hex('#705848')('dark'));
        }
        if(types[type].type.name=='steel'){
            console.log(chalk.hex('#B8B8D0')('steel'));
        }
    }
}