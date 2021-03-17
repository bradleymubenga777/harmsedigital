import Navbar from './components/Navbar';
import Home from './components/Home';
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom';

function App() {
  return (
    <Router>
      <main className="App">
        <Navbar />
        <div className="routeComponet">
          <Switch>
            <Route path="/">
              <Home />
            </Route>


          </Switch>
        </div>
      </main>
    </Router>
  );
}

export default App;
