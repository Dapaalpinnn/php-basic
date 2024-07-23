<?php 

$num = [1,2,3,4,5,6,7,8,9,10];

$college = 
[
    "Programming Language" => "Python",
    "Department" => "Informatics Management",
    "University" => "State University of Surabaya"
];

$result = array_map(fn(int $value) => $value * 10, $num);
var_dump($result);

print_r(array_keys($college)); // Keys pada array
print_r(array_values($college)); // Values pada array
print_r(shuffle($college)); // Ubah random posisi array

?>