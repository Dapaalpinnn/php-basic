<?php 

/* 
* Post Increment
* Penjelasan:
* Kembalikan $a, lalu naikkan satu angka
* $b = $a;
* $a = $a + 1;
*/

$a = 10;
$b = $a++; 

echo "Post Increment A: $a" . PHP_EOL;
echo "Post Increment B: $b" . PHP_EOL;


/* 
* Pree Increment
* Penjelasan:
* Naikkan $a satu angka, lalu kembalikan $a
* $a = $a + 1;
* $b = $a;
*/

$a = 10; 
$b = ++$a;

echo "Pree Increment A: $a" . PHP_EOL;
echo "Pree Increment B: $b" . PHP_EOL;


/* 
* Post Decrement
* Penjelasan:
* Kembalikan $num1, lalu turunkan satu angka
* $num2 = $num1;
* $num1 = $num1 - 1;
*/

$num1 = 20;
$num2 = $num1--;


echo "Post Decrement Num1: $num1" . PHP_EOL;
echo "Post Decrement Num2: $num2" . PHP_EOL;


/* 
* Pree Decrement
* Penjelasan:
* Turunkan $a satu angka, lalu kembalikan $a
* $a = $a - 1;
* $b = $a;
*/

$num1 = 20;
$num2 = --$num1;

echo "Pree Decrement num1: $num1" . PHP_EOL;
echo "Pree Decrement num2: $num2" . PHP_EOL;

?>