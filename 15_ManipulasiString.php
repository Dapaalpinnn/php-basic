<?php 

// Dot Operator

echo "---------- Dot Operator ----------" . PHP_EOL;

$name = "Budi Setiawan";

echo "Nama : " . $name . PHP_EOL;
echo "Nilai : " . 100 . PHP_EOL;



// Konversi Tipe Data

echo "---------- Konversi Tipe Data ----------" . PHP_EOL;

$string = (string)100;
echo "Hasil konversi ke String adalah = " . var_dump($string) . PHP_EOL; 

$integer = (int)"100";
echo "Hasil konversi ke Integer adalah = " . var_dump ($integer) . PHP_EOL;

$float = (float)"100.45";
echo "Hasil konversi ke Float adalah = " . var_dump($float) . PHP_EOL;



// Mengakses karakter
// Mengakses melebihi index akan terjadi error!!


echo "---------- Mengakses karakter ----------" . PHP_EOL;

$myName = "Version Control System";

echo "Hasil index ke-1 = " . $myName[1] . PHP_EOL;
echo "Hasil index ke-5 = " . $myName[10] . PHP_EOL;



// Variable Parsing

echo "---------- Variable Parsing ----------" . PHP_EOL;

$name = "Victor";
echo "Hi $name, happy learn PHP!" . PHP_EOL;  



// Curly Brace (Menggunakan kurung kurawal)

echo "---------- Curly Brace ----------" . PHP_EOL;

$person = "Felix";
echo  "Welcome to {$person}'s Homepage!" . PHP_EOL; // Menggabungkan sesuatu pada value variabel pada saat ditampilkan
?>

