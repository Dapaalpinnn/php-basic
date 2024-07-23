<?php 

$counter = 10;

while (true)
{
    echo "Penggunaan Break ke-$counter" . PHP_EOL;
    $counter++;
    // Cek kondisi
    if($counter > 10){
        break; 
    }
}

?>