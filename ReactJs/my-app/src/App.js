// import logo from './logo.svg';
import './App.css';

let name = "Aayush Vai"

// Babel compiles down jsx to react.createelement()

// There are 2 types of component in js: a> function based component b> class based component. Now a days the function based component is used by most of the developer coz of its easiness shown as below
function App() {
  return (
    // jsx fragment wraps all of the multiple returns 
    <>
      <h1>Hello Welcome to Nepal {name}</h1>
      {/* making a navbar  */}
      <nav>
        <li>Home</li>
        <li>About</li>
        <li>Projects</li>
        <li>Contact</li>
      </nav>
    </>
  );
}
 
export default App;
