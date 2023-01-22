<?php
echo "Hello world\n";
$content = "hello world its it aayush karki";
$finder = "aayush";

$value = strpos($content, $finder);
print $value . "\n";
echo strpos($content, "world");
print "\n";
// . concatenates the value

//define is for the run time initialization whereas the const is for compile time
define('x', 20);
define('name', "ccmt");
// define('parent', "dbk", true);
echo "Constant value: " . x . "\n";
echo "Constant name: " . name . "\n";
// echo "Constant parent: " . parent . "\n";

function writeMsg($parentname = "DBK") //default argument 

{
    echo "parent name: $parentname\n";
}
writeMsg();
writeMsg("Bimala");

?>