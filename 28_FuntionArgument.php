<?php 

// Function dengan argumen

function sayHello($name, $message){
    echo "Welcome $name, $message" . PHP_EOL;
}

sayHello(name: "Steven", message: "Good Morning");
sayHello(name: "Luna", message: "Good Afternoon");


// Default function, menggunakan (=)

function say($firstname = "Anonymous"){ 
    echo "Hi, Welcome $firstname" . PHP_EOL;
}

say();
say("Lunar");


// Tipe data pada argument function

function sum(int $num1, int $num2){ 
    $total = $num1 + $num2;
    echo "Hasil penjumlahan $num1 dan $num2 = $total" . PHP_EOL;
}

sum(1,5);
sum("130", "200");
sum(true, false);


// Variable Length Argument List

$myArray = [1,4,6,7,8,9];
function sumAll(...$values){
    $total = 1;
    foreach($values as $value){
        $total *= $value;
    }
    echo "Total = " . implode(" x ", $values) . " = $total". PHP_EOL;
}

sumAll(...$myArray); // Memanggil tipe data array
sumAll(1,2,3,4,5,6,6,7,120);

?>                  