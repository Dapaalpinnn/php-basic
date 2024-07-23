<?php 

// With If Else

$passed = true;
$message = null;

if($passed == true){
    $message = "Congratulations!";
} else {
    $message = "Try again later...";
}

echo $message . PHP_EOL; 



// With Ternary Operator

$name = "Ilham";
$passed = true;
$result = $passed != true ? "Try again later..." : "Congratulations $name!";
echo $result;

?>