import React from 'react';
import {NavLink} from 'react-router-dom';
const SignedInLink=()=>{
    return (
      <ul className="right"  >
      <li><NavLink to='/'>Log out</NavLink></li>
      <li><NavLink to='/task'>Tasks</NavLink></li>
      </ul>
    )
};
export default SignedInLink