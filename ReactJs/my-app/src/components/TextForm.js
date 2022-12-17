// // Jahile pani starting ma rfc(react function based component) is used 
// import React from 'react'

// export default function TextForm(props) {
//     return (
//         <div>
//             {/* For the text area  */}
//             <div className="mb-3">
//                 <h1>{props.heading}</h1>
//                 <textarea className="form-control" id="myBox" rows="8"></textarea>
//             </div>

//             {/* For the buttons  */}
//             <button className="btn btn-primary">Convert to UPPERCASE</button>
//         </div>
//     )
// }





/*
importing usestate from react.
Use state is a hook. Hooks are a new addition in React 16.8. They let you use state and other React features without writing a class.
*/
import React, { useState } from 'react'

/*Here we have text variable that contains the string "enter text here" and whenever we wanna edit the string we can access or modify it with the help of setText

Declaring a new state variable which we'll call text and access or edit using the setText method
*/


export default function TextForm(props) {
    let counter = 0;
    const handleUpClick = () => {
        counter++;
        console.log("on button click the function handleUpClick is fired, which is arrow function");

        setText("You already clicked the button for " + counter + " times so the function is fired up");
    }

    const handleOnChange = () => {
        console.log("on change fun is triggered");
    }

    // useState 
    const [text, setText] = useState('enter text here');
    // /* using updationFunction to update the text */
    // setText('Everybody must share their opinion in the text box');

    return (
        <div>
            {/* For the text area  */}
            <div className="mb-3">
                <h1>{props.heading}</h1>
                <textarea className="form-control" id="myBox" rows="8" value={text} onChange={handleOnChange} ></textarea>
            </div>

            {/* For the buttons  */}
            <button onClick={handleUpClick} className="btn btn-primary">Convert to UPPERCASE</button>
        </div>
    )
}

