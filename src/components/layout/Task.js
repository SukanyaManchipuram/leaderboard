import React,{Component} from 'react';

class Task extends Component{
    state={
       title:'',
       content:''
    }
    handleChange =(e) =>{
        this.setState({
            [e.target.id]:e.target.value
        })
    }
    handleSubmit=(e) => {
        
            e.preventDefault();
            console.log(this.state);
        }
    
    render() {
        return(
            <div className='container'>
            <h2 className="black-text center" text-align="center">Tasks</h2>
            <div className="left">
            <h4>Task1</h4>
            <p font-size="15px">There are 3 stages in this task.<br/>
             1. Create facebook login page with basic html. <br/>(Note : Don't use any CSS, JS and any frameworks)<br/>
            2. Extend your work by adding CSS and making it exactly similar to the facebook page.<br/>
            3. Then add JS and check if it prints "logged in" in the console. <br/>
            Refer :<a href="https://w3schools.org">w3schools for to practice html, css, js</a> </p>
            <div className="input-field">
            <div className="btn z-depth-0">Submit</div>
            </div>
            </div>
            <div className="right">
            <h4>Task2</h4>
            <p font-size="18px">
            There are 4 stages in this task.<br/>
1. Make a design of leaderboard. (can make it same as the current website)<br/>
2. Connect to database using PHP/NODE JS<br/>
3. Get all the data from database and show in leader board.<br/>
4. Make login compulsory to view leader board.<br/>

References :

Designs for Leaderboard :<a href="https://dribbble.com/tags/leaderboard">click here</a> <br/>

PHP references : 
1. PHP Intro : <a href="https://www.w3schools.com/php/php_mysql_intro.asp">click here</a><br/> 
2. PHP Mysql db :<a href="https://www.w3schools.com/php/php_mysql_intro.asp"> click here </a><br/>
3. PHP CRM example :<a href="https://medium.freecodecamp.org/building-a-simple-crm-from-scratch-in-php-58fef061b075">click here</a> 

            </p>
            <div className="input-field">
            <div className="btn z-depth-0">Submit</div>
            </div>
            </div>
           
            </div>         
        )
    }
}
export default Task