<?php 

// Example Function Variable
function foo(){
    echo "Hello Foo" . PHP_EOL;
}
function bar(){
    echo "Hello Bar" . PHP_EOL;
}

$fooVariable = "foo"; // Simpan nama function dalam variable
$fooVariable();

$barVariable = "bar";
$barVariable();


// Contoh Penggunaan Function Variable
function message(string $message, string $filter){
    $fullMessage = $filter($message); // Mengkonversi $name dengan menggunakan $filter
    echo $fullMessage . PHP_EOL;
}

function test(string $sample) : string
{
    return "Sample message: $sample" . PHP_EOL;
}

message(message: "Congratulations!", filter: "test");
message(message: "Welcome", filter: "strtolower");
message(message: "Good Morning", filter: "strtoupper");

?>

