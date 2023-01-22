<?php

// Indexed array 
$arr = array("apple", "banana", "citrus", "watermelon", "mango");

echo "Elements of indexed array \n";
print_r($arr); //print_r method print the key and value of the array

var_dump($arr); //key and value along with its type and size is printed by var_dump()


// Associative array 
$associativeArr = [
    "fullname" => "Steve Smith",
    "country" => "Australia",
    "profession" => "cricketer"
];

echo "\ncontent of associative array \n";
print_r($associativeArr);

//Multidimensional Array
$multidemsionalArr = [$associativeArr, $arr];

$multidemsionalArr1 = [
    "studentName" => ["joe", "kane", "virat"],
    "rollnum" => array(1, 2, 3)
];

echo "Demo of multidimensional array\n";
print_r($multidemsionalArr);
echo "\n";
print_r($multidemsionalArr1);

$str1 = "Aayush";
$str2 = " Krk";
$str3 = $str1 . $str2;
echo $str3 . "\n";
echo $str1 . $str2 . "\n";
?>