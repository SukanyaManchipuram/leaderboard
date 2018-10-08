import React from 'react';
import {Link} from 'react-router-dom';
import SignedOutLink from './SignedOutLink';
const Navbar=()=>{
    return (
        <nav className='nav-wrapper grey darken-1'>  
        <div className='container'>
        <Link to='/' className='brand-logo'>LeaderBoard</Link>
        <SignedOutLink />
        </div>
        </nav>

    )
};
export default Navbar