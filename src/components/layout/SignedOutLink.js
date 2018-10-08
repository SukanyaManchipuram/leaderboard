import React from 'react';
import {NavLink} from 'react-router-dom';
const SignedOutLink=()=>{
    return (
      <ul className="right"  >
      <li font-size="15px"><NavLink to='/signin'>Signin</NavLink></li>
      <li><NavLink to='/task'>Tasks</NavLink></li>
      <li><NavLink to='/signup'>Signup</NavLink></li>
      </ul>
    )
};
export default SignedOutLink