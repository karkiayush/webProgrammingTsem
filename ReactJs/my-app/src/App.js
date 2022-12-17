// import logo from './logo.svg';
import './App.css';
import Navbar from './components/Navbar';
import TextForm from './components/TextForm';

let name = "Aayush Vai";

// Babel compiles down jsx to react.createelement()

// There are 2 types of component in js: a> function based component b> class based component. Now a days the function based component is used by most of the developer coz of its easiness shown as below
function App() {
  return (
    // jsx fragment wraps all of the multiple returns 
    <>
      {/* Navbar  */}
      {<Navbar title=
        "Navbar Title" aboutText="About me"
        landingpage="Home" />}

      {/* div  container helps to place the input area in center */}
      <div className="container my-5">
        <TextForm heading="Write your opinion" />
      </div>
    </>
  );
}

export default App;
