<?php 

// MEMBUAT ARRAY
$values = array(1, 2, 3, 4);
var_dump($values);

$names = ["John", "Steven", "Budi"];
var_dump($names);


// OPERASI ARRAY
// Mengakses data array
echo "Mengakses data array : " . PHP_EOL;
var_dump($names[0]);

// Mengubah data array
echo "Mengubah data array : " . PHP_EOL;
$names[0] = "Levi";
var_dump($names);

// Menambah data array
echo "Menambah data array : " . PHP_EOL;
$names[] = "Luna";
var_dump($names);

// Menghapus data
echo "Menghapus data array : " . PHP_EOL;
unset($names[1]);  
var_dump($names);

// Banyak jumlah data array
echo "Jumlah data array : " . PHP_EOL;
var_dump(count($names));

?>

