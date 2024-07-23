<?php 

// Penggunaan GoTo Sederhana

goto a; 
echo "Hello World"; // Skip
a:
echo "My name is Dafa Alvin" . PHP_EOL; // Dieksekusi


// Penggunaan GoTo complex

$counter = 1;
while(true){
    echo "Learn about GoTo number-$counter" . PHP_EOL;
    $counter++;
    if($counter >= 10){
        goto stop;
    }
}

stop:
echo "End Loop"; // Dieksekusi oleh Goto

?>