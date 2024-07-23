<?php 

/* 
    * Do While Loop
    * Minimal dieksekusi sekali meskipun tidak bernilai true
*/

// Inisialisasi nilai awal
$counter = 11; 
do{
    echo "Perulangan Do While ke " . $counter . PHP_EOL;
    $counter++; //Increment
} while ($counter <= 10);   

?>
