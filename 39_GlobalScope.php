<?php 
/*
* Global Scope 
* Berada diluar function
* Tidak bisa diakses di dalam function
*/


$name = "Steve"; // Global Scope
function say(){
    echo $name; // Error Code
}

say();

?>