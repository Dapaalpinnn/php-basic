<?php 

// Function
function sayHello(){
    echo "Hello World!" . PHP_EOL;
}

// Memanggil function
sayHello();


// Function dalam If
$create = true;
if($create){ // selama $create bernilai True
    function hello(){
        echo "Hello" . PHP_EOL;
    }
}

hello();
hello();
hello();

?>