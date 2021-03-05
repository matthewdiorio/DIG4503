const axios = require("axios"); //including axios 
const chalk = require('chalk'); //include chalk

class Pokemon {
    constructor(pokemonName) {
        this.name = pokemonName
        this.sendRequest()
    }

    async sendRequest() {
        axios('https://pokeapi.co/api/v2/pokemon/' + this.name) //fetching api
            .then(function (response) { // getting the response
                const pokemon = response.data; //set pokemon to response data
                console.log("This is a " + pokemon.name + " and its ID is " + pokemon.id); //Prints out the pokemon name and ID from the API to the console

                console.log('Types:') // prints  types
                let types = pokemon.types;
                for (let i = 0; i<types.length; i++) { // looping through the types and printing to console using chalk to match related color
                    if (types[i].type.name == 'fire') {
                        console.log(chalk.hex('#F08030')('fire'));
                    }
                    if (types[i].type.name == 'grass') {
                        console.log(chalk.hex('#78C850')('grass'));
                    }
                    if (types[i].type.name == 'ice') {
                        console.log(chalk.hex('#98D8D8')('ice'));
                    }
                    if (types[i].type.name == 'poison') {
                        console.log(chalk.hex('#A040A0')('poison'));
                    }
                    if (types[i].type.name == 'flying') {
                        console.log(chalk.hex('#A890F0')('flying'));
                    }
                    if (types[i].type.name == 'bug') {
                        console.log(chalk.hex('#A8B820')('bug'));
                    }
                    if (types[i].type.name == 'ghost') {
                        console.log(chalk.hex('#705898')('ghost'));
                    }
                    if (types[i].type.name == 'dragon') {
                        console.log(chalk.hex('#7038F8')('dragon'));
                    }
                    if (types[i].type.name == 'fairy') {
                        console.log(chalk.hex('#F0B6BC')('fairy'));
                    }
                    if (types[i].type.name == 'normal') {
                        console.log(chalk.hex('#A8A878')('normal'));
                    }
                    if (types[i].type.name == 'water') {
                        console.log(chalk.hex('#6890F0')('water'));
                    }
                    if (types[i].type.name == 'electric') {
                        console.log(chalk.hex('#F8D030')('electric'));
                    }
                    if (types[i].type.name == 'fighting') {
                        console.log(chalk.hex('#C03028')('fighting'));
                    }
                    if (types[i].type.name == 'ground') {
                        console.log(chalk.hex('#E0C068')('ground'));
                    }
                    if (types[i].type.name == 'psychic') {
                        console.log(chalk.hex('#F85888')('psychic'));
                    }
                    if (types[i].type.name == 'rock') {
                        console.log(chalk.hex('#B8A038')('rock'));
                    }
                    if (types[i].type.name == 'dark') {
                        console.log(chalk.hex('#705848')('dark'));
                    }
                    if (types[i].type.name == 'steel') {
                        console.log(chalk.hex('#B8B8D0')('steel'));
                    }
                }
                console.log("")
            })
            .catch(function (error) { //error handler
                console.log("Error: " + error); //prints out the error to the console
            });
    }


    listTypes(types) { // function to print types to console

    }
}

var charizard = new Pokemon('charizard')

var pikachu = new Pokemon('pikachu')