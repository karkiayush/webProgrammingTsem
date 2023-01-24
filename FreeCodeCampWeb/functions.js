// It's a normal function 
function myFun() {
    console.log("Good Morning Darling,Hope you have nice dream last night");
};
myFun();

// It's immediately invoked function 
(function greetingFunction() {
    console.log("Good Morning Darling");
})();


// Anonymous Function : function without any name and is assigned to another variable
const anonymousFunction = function () {
    console.log("\nHello, it's the demo of anonymous function");
}
anonymousFunction();

// Arrow Function 
// a.Immediately invoked 
const arrowFunction = (() => {
    console.log('demo of arrow function');
})();

const arrowMethod = () => {
    console.log('demo of arrow method');
};
arrowMethod();


const naam = 'joe denly';
const result = naam.toUpperCase().split(" ");
console.log(result);

let stringName = 'hello';
console.log(stringName);

let splitedString = stringName.split();
let reveredArray = splitedString.reverse();
let finalAns = reveredArray.join();
console.log(finalAns);


const afunction = (() => { console.log("arrow method"); })();

afunction;