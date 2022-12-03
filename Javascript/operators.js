/*
ARITHMETIC 
ASSIGNMENT 
LOGICAL
COMPARISION
BITWISE
TYPE


ARITHMETIC OPERATOR 
 +, -, *, /
%: modulo division(Modulus)
**: epxponentiation(ES2016): x^n; 
++, --
*/
console.log(2 + 3);
console.log(2 - 3);
console.log(2 * 3);
console.log(2 / 3);
console.log(2 % 3);
console.log(2 ** 3);//makes  2 to the power 3

/*              ASSIGNMENT OPERATOR 
simply adds the value to the variable.
=, +=, -=, *=, /=, %=, **=,
*/

// when used in the string operation the + operator is called as concatenation operator 
var s1 = "What a nice ", s2 = "day!";
s1 += s2;
console.log(s1);

// adding the string and numbers 
var x = '5';
var y = 10;
console.log(x + y);
console.log(typeof (x + y));


/*  COMPARISION OPERATOR 
==	equal to
===	equal value and equal type
!=	not equal
!==	not equal value or not equal type
>	greater than
<	less than
>=	greater than or equal to
<=	less than or equal to
?	ternary operator
*/

console.log("\nUSING THE COMPARISION OPERATOR");
function prints() {
    console.log("output of the ternary operator is true")
}
function printb() {
    console.log("output of the ternary operator is false")
}

var x = '5';
var y = 5;
console.log(x == y);
console.log(x === y);
console.log(x != y);
console.log(x !== y);
console.log(x > y);
console.log(x < y);
console.log(x <= y);
console.log(x >= y);
console.log(x === y ? prints() : printb());


/*LOGICAL OPERATOR
logical and : &&
logical or :||
logical not : !
*/
console.log("\nLogical Operator")
console.log(x == y && x === y);//false
console.log(x == y || x === y);//true
console.log(!(x == y));//false


/*TYPE  OPERATOR
typeof:	    Returns the type of a variable
instanceof:	Returns true if an object is
an instance of an object type
*/
console.log("\n Type Opearator")
console.log(typeof (x));
var names = ['joe', 'mike', 'smith'];
console.log(names instanceof Array);


/*BITWISE OPERATOR
Bitwise operators work on bits.
Bitwise operators work on 32 bits numbers.

& AND
| OR
~ NOT
^ XOR
<< Left shift
>> Right shift
>>> unsigned right shift
*/