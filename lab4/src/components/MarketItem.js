import React from 'react';

function MarketItem (props) {
    //display text and count
    return( 
        <div>
            <p>Item {props.count}</p> 
        </div>
    );
}

export default MarketItem;