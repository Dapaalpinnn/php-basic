<?php 

// Example Function Return Value 1
function sum(int $num1, int $num2){
    $total = $num1 + $num2;
    return $total;
}

var_dump($result = sum(100, 120));
var_dump($result = sum("100", 100));



// Example Function Return Value 2 
function getFinalValue($value)
{
    if($value >= 90){
        return "A";
    } else if($value >= 80){
        return "B";
    } else if($value >= 70){
        return "C";
    } else if($value >= 60){
        return "D";
    } else {
        return "Try Again";
    }
}

echo "Score: ". $score = getFinalValue(100) . PHP_EOL ; 


// Example Return Type Declaration
function score($myscore) :string 
{
    if($myscore >= 90){
        return "A";
    } else if($myscore >= 80){
        return "B";
    } else if($myscore >= 70){
        return "C";
    } else if($myscore >= 60){
        return "D";
    } else {
        return "Try Again";
    }
}

echo "Result : " . $myResultScore = score(100);




?>