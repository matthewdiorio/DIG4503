import React from 'react';

class AgeSearch extends React.Component {
    readScore(event) {
        event.preventDefault();
        let element = document.querySelector("#Age"); //get content in age input

        fetch("/ages/" + element.value)
            .then((res) => {
                return res.json()
            })

            .then((processed) => {
                let reporting = document.querySelector("#reportingArea");
                if (processed.error) {
                    reporting.innerHTML = processed.error;
                } else {
                    reporting.innerHTML = processed.name;
                }
            })
        element.value = "";
    }

    render() {
        return(
            <div>
                 <h2>Age</h2>
                 <form onSubmit={this.readScore}>
                    <input id="Age" type="text"/>
                     <button>Submit</button>
                  </form>
            </div>
        )
    }

}

export default AgeSearch;