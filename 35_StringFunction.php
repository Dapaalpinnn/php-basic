<?php 

// String Function => Strtoupper 
function Capital(string $message, callable $filter)
{
    $finalResult = call_user_func($filter, $message);
    echo "Uppercase Word: $finalResult" . PHP_EOL;
}

Capital("special place for special moments", function ($message){
    return strtoupper($message);
});


// String Function => Implode
$num = [1,2,3,4,5,6,5,7,5,435,35,189];
function sum(...$values){
    $result = 0;
    foreach ($values as $value){
        $result += $value;
    }
    echo "Total = " . implode(" + ", $values) . " = $result " . PHP_EOL;
}   

sum(...$num);


// Lainnya
var_dump(join(", ",[1,2,3,4,5,6,7,8,9])); // Menggabungkan
var_dump(explode(" ", "Informatics Engineering")); // dipecah menjadi array
var_dump(strtolower("MANCHESTER UNITED"));
var_dump(strtoupper("manchester city"));
var_dump(trim("     Hello     ")); // Menghapus Whitespace
var_dump(substr("Special Place", 0, 8)) // Mengambil index ke-0 sampai ke-8

?>