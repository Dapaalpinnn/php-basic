<?php 

// Untuk mengecek tipe data nda me-return tipe data boolean true or false 

$data = "Hello World";

echo "Apakah tipe data Boolean : " , var_dump(is_bool($data)) . PHP_EOL;
echo "Apakah tipe data Integer : " , var_dump(is_int($data)) . PHP_EOL;
echo "Apakah tipe data Float : " , var_dump(is_float($data)) . PHP_EOL;
echo "Apakah tipe data String : " , var_dump(is_string($data)) . PHP_EOL;
echo "Apakah tipe data Array : " , var_dump(is_array($data)) . PHP_EOL;
echo "Apakah tipe data Null : " , var_dump(is_null($data)) . PHP_EOL;

?>