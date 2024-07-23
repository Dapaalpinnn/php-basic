<?php 

/* 
    * Reference
    * Seperti mengcopy value
*/


// Without References
$name = "Luna";
$otherName = $name;
$otherName = "Steve";

echo "Hi, $name" . PHP_EOL;


// Menggunakan References
$name = "John Doe";
$otherYourName = &$name; // Reference
$otherYourName = "Rudi Hidayat";
echo "Good Morning $name" . PHP_EOL;


// Function Increment
function increment(int &$value){ //Mengirimkan reference ke $counter
    $value++;
}

$counter = 1;
increment($counter);

echo "Increment = $counter" . PHP_EOL;
echo "Increment = $counter" . PHP_EOL;

?>