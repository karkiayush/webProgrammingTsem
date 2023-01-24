/* we can do oop using :
a> constructor function with prototypes 
b> using ES-6 classes */

function personInfo(firstName, lastName, dob) {
    this.firstName = firstName;
    this.lastName = lastName;
    this.dob = dob;
}
const person1 = new personInfo('Samm', 'Khadka', '25-06-1984');
console.log(person1);

function friendInfo(firstName, lastName, dob) {
    this.firstName = firstName;
    this.lastName = lastName;
    this.dob = new Date(dob);
}
const friend1 = new friendInfo('Shreyana', 'Khadka', '01-06-1984');
console.log(friend1);
console.log(man1.dob);