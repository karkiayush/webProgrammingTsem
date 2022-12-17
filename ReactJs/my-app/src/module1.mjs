// Named export and Default export in js 

import ui, { a, c, d } from './module2.mjs'; //curly braces are used if the export is not by default 

console.log(ui);//Rohan will be poped in the terminal since we here by default export aakash 

console.log(c);
console.log(d);
console.log(a);//since the export is not by default, so the name of the export is strictly checked 

