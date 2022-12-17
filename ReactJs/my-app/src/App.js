// import logo from './logo.svg';
import './App.css';

let name = "Aayush Vai";

// Babel compiles down jsx to react.createelement()

// There are 2 types of component in js: a> function based component b> class based component. Now a days the function based component is used by most of the developer coz of its easiness shown as below
function App() {
  return (
    // jsx fragment wraps all of the multiple returns 
    <>
      {/* Navbar  */}
      <nav className="navbar navbar-expand-lg bg-light">
        {/* Main div */}
        <div
          // Here we'll be using react router, so we replace href="#" by / </nav>

          className="container-fluid">
          <a className="navbar-brand" href="/">Aayush's Navbar</a>
          <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span className="navbar-toggler-icon"></span>
          </button>
          <div className="collapse navbar-collapse" id="navbarSupportedContent">
            <ul className="navbar-nav me-auto mb-2 mb-lg-0">

              {/* Home link  */}
              <li className="nav-item">
                <a className="nav-link active" aria-current="page" href="/">Home</a>
              </li>

              {/* About link  */}
              <li className="nav-item">
                <a className="nav-link" href="/">About</a>
              </li>

            </ul>

            {/* Nav bar ends  */}
            <form className="d-flex" role="search">
              <input className="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
              <button className="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </>
  );
}

export default App;
