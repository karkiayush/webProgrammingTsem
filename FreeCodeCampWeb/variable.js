/*Variables in JS 
var allows us to redeclare the variable in js

const makes the constant type of variable

let is used when we wanna reassign the variable at some point 
*/
console.log('let allows us to reassign the variable');
let value = 44;
console.log(value);
value = "Matlab";
console.log(value);

console.log('\nvar allows us to redeclare the variable');
var topper = 'joe';
console.log(topper);
var topper = 11;
console.log(topper);

const variable1 = function () {
    return 'hello my friend';
};
const variable2 = 'Rabin';

console.log(variable1 + variable2);

console.log(typeof (variable1));

// Assignment 
const firstNumber = 20;
const secondNumber = 40;
const myArray = ["myBoolean", myString];

const myObject = { firstProperty: myArray, sumProperty: firstNumber + secondNumber };

console.log('Assignment answer\n');
console.log(myObject.sumProperty);


