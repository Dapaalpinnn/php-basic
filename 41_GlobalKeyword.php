<?php 

/* 
* Global Keyword 
* Digunakan untuk mengakses Global Scope
*/

$name = "Steve Joe";

function say(){
    global $name; // Global Keyword
    echo "Hi, $name" . PHP_EOL;
}

say()

?>