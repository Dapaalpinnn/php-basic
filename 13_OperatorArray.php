<?php 

// Union
$user = 
[
    "Username" => "Alexandra",
    "Email" => "alexandra@gmail.com",
];

$address = 
[
    "Street" => "Jl. Antasari No.11",
    "Village" => "Lidah Wetan",
    "District" => "Lakarsantri",
    "City" => "Surabaya",
];

$data = $user + $address;
echo "Hasil dari hasil operator Union adalah: ", var_dump($data) . PHP_EOL;


// Equality and Identity
$department = 
[
    "Department" => "Informatics Engineering",                                                           
    "University" => "State University of Surabaya"
];

$university = [
    "University" => "State University of Surabaya",
    "Department" => "Informatics Engineering",                                                        
];

echo "Equality: ", var_dump($department == $university);
echo "Identity: ", var_dump($department === $university);

?>