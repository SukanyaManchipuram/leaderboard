import React,{ Component } from 'react';
import View from './View';
import List from './List';
class Board extends Component{
    render() {
        return (
            <div className="board container">
            <div className="row">
            <div ><List /></div>
            </div>
            </div>
        )
    }
}
export default Board