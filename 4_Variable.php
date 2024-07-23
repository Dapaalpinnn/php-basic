<?php 

// Membuat Variable
$firstName = "Dafa";
$age = 18;
echo "Hello my name is $firstName and my age is $age" . PHP_EOL;

// Menghapus variabel
$rank = "Conqueror";
unset($rank);
// echo "$rank"; // Undefined variables

// Cek apakah variable ada atau tidak
echo "Apakah value pada rank ada adalah: " . PHP_EOL;
var_dump(isset($rank));

$rank = "Ace";
echo "Apakah value terbaru dari variable Rank ada: " . PHP_EOL;
var_dump(isset($rank));
?>

