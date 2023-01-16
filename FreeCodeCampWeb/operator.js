const numberValue = 33;
const stringValue = '33';

console.log(Number(stringValue) === numberValue);

/*This below Number method convert the other data type to number only for that run time(say single time)*/
Number(stringValue);
console.log(stringValue === numberValue);