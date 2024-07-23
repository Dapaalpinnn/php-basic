<?php 

/* 
* Anonymous Function / Closure
* Tidak memiliki nama Function
* Biasanya disimpan dalam variable function
*/

$anonymous = function (string $name){
    echo "Hi, $name!" . PHP_EOL; 
};

$anonymous("Alexander Arnold");



// Contoh Anonymous Function Sebagai Argument
function sayGoodBye(string $message, $filter)
{
    $result = $filter($message);
    echo $result . PHP_EOL;
}

// Memanggil dan membuat argument 'filter' menjadi function
sayGoodBye("Cristiano Ronaldo", function(string $message): string {
    return strtolower($message);
});

// Simpan Variable Anonymous Function Dalam Function Varible
$sayGoodBye = function(string $name): string {
    return strtoupper($name);
};

sayGoodBye("Christoper Colombus", $sayGoodBye);


// Contoh Mengakses Variable Luar (Menggunakan use)
$department = "Informatics Engineering";
$university = "State University of Surabaya";

$say = function () use ($department, $university){
    echo "Welcome to Department $department, $university" . PHP_EOL;
};

$say();


?>