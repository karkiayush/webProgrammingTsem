const numberValue = 33;
const stringValue = '33';

console.log(Number(stringValue) === numberValue);

/*This below Number method convert the other data type to number only for that run time(say single time)*/
Number(stringValue);
console.log(stringValue === numberValue);

// Ternary operator 
const result1 = '55';
const result2 = 55;
console.log(result1 == result2 ? 'value is same' : 'value is not same');
console.log('\n2nd result');
console.log(result1 == result2 ? 'value is same' : 'value is not same');