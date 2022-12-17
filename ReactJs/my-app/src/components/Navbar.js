// Here we will be learning about the react components. While making the components the name will always be in cap letter

// Props are passing things like arguments and once we set the props, then we must not change it(or can't change frequently)

// Importing the react function based component 
import React from 'react'
import PropTypes from 'prop-types'


export default function Navbar(props) {
    return (
        < nav className="navbar navbar-expand-lg bg-light" >
            {/*  Main div */}
            < div
                // Here we'll be using react router, so we replace href="#" by / </nav>

                className="container-fluid" >
                <a className="navbar-brand" href="/">{props.title}</a>
                <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span className="navbar-toggler-icon"></span>
                </button>
                <div className="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul className="navbar-nav me-auto mb-2 mb-lg-0">

                        {/* Home link  */}
                        <li className="nav-item">
                            <a className="nav-link active" aria-current="page" href="/">{props.landingpage}</a>
                        </li>

                        {/* About link  */}
                        <li className="nav-item">
                            <a className="nav-link" href="/">{props.aboutText}</a>
                        </li>

                    </ul>

                    {/* Nav bar ends  */}
                    <form className="d-flex" role="search">
                        <input className="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                        <button className="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div >
        </nav >
    )
}

/* Learning about PropTypes
We can say the proptypes is array that stores the types of various type
*/
Navbar.propTypes = {
    title: PropTypes.string.isRequired,
    aboutText: PropTypes.string.isRequired,
};

/*default props helps us in condition when we don't supply the props*/
Navbar.defaultProps = {
    title: "Set title",
    aboutText: "about text",
    landingpage: "landing page",
};