<?php 

for($counter = 1; $counter <= 10; $counter++) {
    echo "Perulangan ke-$counter" . PHP_EOL;
}

// Syntax Alternatif 
for($counter = 10; $counter >= 1; $counter--) :
    echo "Perulangan ke-$counter" . PHP_EOL;
endfor;

?>