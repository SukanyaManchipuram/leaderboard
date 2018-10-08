import React,{Component} from 'react';

class SignedUp extends Component{
    state={
        email:'',
        firstName:'',
        lastName:'',
        about:'',
        phone:'',
        linkedin:'',
        facebook:''
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
            <form  onSubmit={this.handleSubmit} className="white">
            <h4 className="grey-text grey-darken-3">Sign up</h4>
            <div className="input-field">
            <label htmlFor="firstName">First name</label>
            <input type="text" id="firstName" onChange={this.handleChange} />
            </div>
            <div className="input-field">
            <label htmlFor="lastName">Last name</label>
            <input type="text" id="lastName" onChange={this.handleChange} />
            </div>
            <div className="input-field">
            <label htmlFor="about">About</label>
            <input type="text" id="about" onChange={this.handleChange} />
            </div>
            <div className="input-field">
            <label htmlFor="email">Email</label>
            <input type="email" id="email" onChange={this.handleChange} />
            </div>
            <div className="input-field">
            <label htmlFor="phone">Phone</label>
            <input type="text" id="phone" onChange={this.handleChange} />
            </div>
            <div className="input-field">
            <label htmlFor="linkedin">Linkedin profile link</label>
            <input type="text" id="linkedin" onChange={this.handleChange} />
            </div>
            <div className="input-field">
            <label htmlFor="facebook">Facebook profile link</label>
            <input type="text" id="facebook" onChange={this.handleChange} />
            </div>
            <div className="input-field">
            <div className="btn btn-primary z-depth-0">Signup</div>
            </div>
            </form>
            </div>         
        )
    }
}
export default SignedUp