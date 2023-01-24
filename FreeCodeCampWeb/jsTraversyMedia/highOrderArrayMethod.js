// It consist of foreach, map and filter. This method is preferred for iteration 

const todos = Array(
    "wash cloth",
    "eat food", "Learn Js", "Make a full stack project"
);

console.log("For each loop demo");
todos.forEach(function (todo) {
    console.log(todo);
});

// Map returns an array 
console.log("\nMap demo");
const todoarr = todos.map(function (todo) {
    return todo;
});
console.log(todoarr);

//filter return the specific content based on the checking condition
const fDemo = Array(
    {
        "identity": "Joe",
        age: 12,
        isMarried: true
    },

    {
        "identity": "steven",
        age: 15,
        isMarried: false
    }
);

console.log("\nDemo of filtered array");
const filteredArray = fDemo.filter(function (demo) {
    return demo.isMarried == true;
});
console.log(filteredArray);