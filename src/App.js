import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.min.js';

import { Navigation } from "./components/navigation";
import logo from './logo.svg';
import './App.css';
import { BrowserRouter as Router, Routes, Route}
    from 'react-router-dom';
import Home from './pages/Home';
import About from './pages/About';


function App() {
  return (
<div>
<Router>
<Navigation />
<Routes>
<Route exact path='/'  element={<Home />} />
<Route exact path='/about' element={<About />} />
</Routes>
</Router>
</div>
  );
}

export default App;
