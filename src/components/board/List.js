import React from 'react';
import './List.css';
import pic1 from './images/1.jpeg';
import pic2 from './images/3.jpeg';
import pic3 from './images/7.png';
import pic4 from './images/4.png';
import pic5 from './images/5.png';
import pic6 from './images/2.png';
import pic7 from './images/6.png';
import pic8 from './images/9.png';
const List=() =>{
    return (
        <div className="list section" padding-left="50px" padding-right="50px">
        <table>
        <tr><td>
           <center>
           <div className="card z-depth-0 "border="solid 1px">
           <div className="card-content grey-text text-darken-3">
            <img width="200" height="200" src={pic1} alt="Winner"  />
            <h4>Mnopq</h4>
            <p>score:29</p>
           </div>
           </div>
           </center>
        </td>
        <td/>
        <td>
        <center>
        <div className="card z-depth-0 ">
        <div className="card-content grey-text text-darken-3">
        <img width="200" height="200" src={pic2} alt="Runner1" />
        <h4>David</h4>
        <p>score:27</p>
        </div>
        </div>
        </center>
        </td>
        <td/>
        <td>
        <center>
        <div className="card z-depth-0 ">
        <div className="card-content grey-text text-darken-3">
        <img width="200" height="200" src={pic3} alt="Runner2" />
        <h4>Alice</h4>
        <p>score:27</p>
        </div>
        </div>
        </center>
        </td>
        </tr>
        </table><br/>
        <table>
        <tr>
            <td>
                <img width="50" height="50" src={pic4} alt="member" />
            </td>
            <td>Chay</td>
            <td></td>
            <td>  19    </td>
            <td><a href="">     view    </a></td>
        </tr>
        <tr>
            <td>
                <img width="50" height="50" src={pic5} alt="member" />
            </td>
            <td>Sid</td>
            <td></td>
            <td>  18    </td>
            <td><a href="">     view    </a></td>
        </tr>
        <tr>
            <td>
                <img width="50" height="50" src={pic8} alt="member" />
            </td>
            <td>Marie</td>
            <td></td>
            <td>  16    </td>
            <td><a href="">     view    </a></td>
        </tr>
        <tr>
            <td>
                <img width="50" height="50" src={pic1} alt="member" />
            </td>
            <td>John</td>
            <td></td>
            <td>  16    </td>
            <td><a href="">     view    </a></td>
        </tr>
        <tr>
            <td>
                <img width="50" height="50" src={pic6} alt="member" />
            </td>
            <td>Sam</td>
            <td></td>
            <td>  15    </td>
            <td><a href="">     view    </a></td>
        </tr>
        <tr>
            <td>
                <img width="50" height="50" src={pic3} alt="member" />
            </td>
            <td>Ria</td>
            <td></td>
            <td>  14   </td>
            <td><a href="">     view    </a></td>
        </tr>
        <tr>
            <td>
                <img width="50" height="50" src={pic4} alt="member" />
            </td>
            <td>Harry</td>
            <td></td>
            <td>  13    </td>
            <td><a href="">     view    </a></td>
        </tr>

        </table>
        </div>
    )
}
export default List