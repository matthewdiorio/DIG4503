import React, {Component} from 'react';
import MarketItem from './MarketItem.js';

class Market extends Component {
    //set inital count to 0
    constructor(props){
        super(props)
        this.state = {
            count: 0
        };
    };

    //adds Market Item and a button to set state of the count
    render() {
        return(
            <div>
                <MarketItem count={this.state.count}/>
                <button onClick={() => this.setState({count: this.state.count+1})}>Add Item</button>
            </div>
        )
    }
}

export default Market;