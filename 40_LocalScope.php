<?php 

/* 
    * Local Scope
    * Variable yang dibuat di dalam function
    * Hanya bisa diakses oleh function itu sendiri
*/


function createName()
{
    $name = "Steve"; // Local Scope
    echo "Hello $name";
}

createName();

?>