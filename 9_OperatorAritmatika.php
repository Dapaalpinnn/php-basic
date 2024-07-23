<?php 

$num1 = 1000;
$num2 = 3;

$result = $num1 * $num2;
var_dump($result); // int(3000)

$resultNegative = -$result;
var_dump($resultNegative); // int(-3000)

$resultModulo  = $num1 % $num2;
var_dump($resultModulo) // int(1)

?>