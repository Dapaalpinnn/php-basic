<?php 

function testCallback(string $name, callable $filter){
    $finalName = call_user_func($filter, $name);
    // Sama seperti => $finalName = $filter($name);
    echo "Welcome to Administrator $finalName" . PHP_EOL;
}

testCallback("Steven Joe", "strtoupper");
// Anonymous Function
testCallback("John Smith", function(string $name) : string {
    return strtoupper($name); 
});    
// Arrow Function
testCallback("Rudi Abdillah", fn($name) => strtoupper($name)); 

?>