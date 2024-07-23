<?php 

// Data null
$firstName = "Dafa";
$firstName = null; // Mengubah value variable firstName menjadi null
$age = null; // Deklarasi awal dengan nilai null

echo "Nama: $firstName" . PHP_EOL; 
echo "Umur: $age" . PHP_EOL;


// Cek apakah data kosong   
echo "Apakah variable firstName null?" . PHP_EOL;
echo var_dump(is_null($firstName));
 

// Cek apakah variable ada dan tidak null (Direkomendasikan)
echo "Apakah value dari variable Age ada: ";
echo var_dump(isset($age)). PHP_EOL;

$rank = "Ace";

echo "Apakah value terbaru dari variable Age ada : ";
var_dump(isset($rank)) . PHP_EOL; 

?>