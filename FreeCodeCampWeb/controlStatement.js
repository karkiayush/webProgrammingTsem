const colors = ['blue', 'green', 'red', 'violet', 'yellow'];

// random method of math gives the value from 0 to less than 1 but not exact 1 : 0<=x<1.

// And then the floor method returns the lower integer value if the value is fractional  
const randomIndex = Math.floor(Math.random() * colors.length);

console.log(randomIndex);
const randomColors = colors[randomIndex];
console.log(randomColors);

