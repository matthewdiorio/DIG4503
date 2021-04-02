import React from "react";

class NameSearch extends React.Component {
    readName(event) {
        event.preventDefault();
        let element = document.querySelector("#Name");

        fetch("/employees/" + element.value)
            .then((res) => {
                return res.json()
            })

            .then((processed) => {
                let reporting = document.querySelector("#reportingArea");
                if (processed.error) {
                    reporting.innerHTML = processed.error;
                } else {
                    reporting.innerHTML = processed.age;
                }
            })
            element.value = "";
    }

    render(){
        return(
            <div>
                <h2>Name</h2>
                <form onSubmit={this.readName}>
                    <input id="Name" type="text"/>
                    <button>Submit</button>
                </form>
            </div>
        )
    }
}

export default NameSearch;