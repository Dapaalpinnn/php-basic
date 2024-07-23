<?php 

// Membuat array map dengan custom key

$admin = 
[
    "Id" => "23973648264",
    "Name" => "Dafa Alvin",
    "Birthday" => "18 September 2004",
    // Nested array 
    "Address" => 
    [
        "Street" => "Jl. Jendral Sudirman",
        "Village" => "Lidah Wetan",
        "District" => "Lakarsantri",
        "City" => "Surabaya",
        "Country" => "Indonesia"
    ]
];

echo "Data user: ";
var_dump($admin);

// Mengakses nested array
var_dump($admin["Address"]["Country"]) . PHP_EOL;
?>