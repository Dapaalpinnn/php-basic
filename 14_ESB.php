<?php 

/* 
* Expression
* Apapun yang memiliki nilai atau value
*/

$a = 5; // 5 adalah expression
$b = $a;// $a adalah expression

// Contoh expression complex
function getValue(){
    return 100;
};

$value = getValue(); // getValue() adalah expression karena memiliki nilai 100



/* 
* Statement
* Satu kalimat lengkap
*/

echo $fullName = "Alexa Alexandra" . PHP_EOL;
$date = new DateTime();
var_dump($date);



/* 
* Block
* Kumpulan nol atau lebih statement
*/

function runApp($program)
{
    echo "Start Program" . PHP_EOL;
    echo "Running $program " . PHP_EOL;
    echo "End Program" . PHP_EOL;
}

runApp("Update Version");

?>
