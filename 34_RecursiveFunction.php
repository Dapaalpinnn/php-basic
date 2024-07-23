<?php 

// Create Factorial with Looping
function factorialLoop(int|float $value) : int|float 
{
    $total = 1;
    for($i = 1; $i <= $value ; $i++){
        $total *= $i;
    };

    return $total;
}

var_dump(factorialLoop(5));  



// Create Factorial Recursive Function
function factorialRecursive(int|float $value) : int|float 
{
    if($value = 1){
        return 1;
    } else {
        return $value * factorialRecursive($value - 1);
    }
}

var_dump(factorialLoop(20)); 



// Error Recursive Stack Overflow
function loop(int $value)
{
    if($value == 0){
        echo "Program Selesai" . PHP_EOL;
    } else {
        echo "Loop ke $value " . PHP_EOL;
        loop ($value -= 1);
    };
;}

loop(5); 

?>