import React, { Component } from 'react';
import {BrowserRouter,Switch,Route } from 'react-router-dom';
import Navbar from './components/layout/Navbar';
import Board from './components/board/Board';
import SignedIn from './components/auth/SignedIn';
import SignedUp from './components/auth/SignedUp';
import Task from './components/layout/Task';
class App extends Component {
  render() {
    return (
      <BrowserRouter>
      <div className="App">
        <Navbar />
        <Switch>
        <Route exact path='/' component={Board} />
        <Route path='/signin' component={SignedIn} />
        <Route path='/signup' component={SignedUp} />
        <Route path='/task' component={Task} />
        </Switch>
      </div>
      </BrowserRouter>
    );
  }
}

export default App;
