<?php 

$data = 
[
    "Fullname" => "Muhammad Budi Santosa"
];


// Without Coalescing Operator
if (isset($data["Fullname"])){
    $action = $data["Fullname"]; // Tampilkan variable $action
} else {
    $action = "Nothing";
}

echo $action . PHP_EOL;



// With Null coalescing operator
$APP = 
[
    "Website" => "www.lynx.com",
    "Version" => "2.3.41",
];

$check = $APP["Version"] ?? "Is Maitenance";
echo "Version : $check" . PHP_EOL;

?>