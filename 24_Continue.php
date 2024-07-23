<?php 

for($counter = 1; $counter <= 10; $counter++){
    if($counter % 2 == 0){
        continue;
    }
    echo "Bilangan ganjil = $counter" . PHP_EOL;
}

for($counter = 1; $counter <= 10; $counter++):
    if($counter % 2 == 1):
        continue;
    endif;
    echo "Bilangan genap = $counter" . PHP_EOL;
endfor;
?>