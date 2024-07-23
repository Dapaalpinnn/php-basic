<?php 

/* 
* Arrow function dan anonymous function adalah dua hal yang sama 
* bedanya variable di luar closure bisa digunakan
* Arrow function dikhususkan untuk membuat function yang sederhana
*/



// With Anonymous Function
$name = "Joe Smith";
$department = "Chemical Engineering";

$anonymousFunction = function() use ($name, $department) : string 
{
    return "Hi, my name is $name and i study at Department $department" . PHP_EOL;
};

echo $anonymousFunction();



// With Arrow Function
$arrowFunction = fn() => "Hello World, my name is $name and i study at $department" . PHP_EOL;
echo $arrowFunction();

?>