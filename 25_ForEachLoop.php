<?php 

/* 
* For Each Loop 
* Direkomendasikan ketika mengiterasi data pada array
*/

// Without For Each Loop
$day = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
for($i = 0; $i < count($day); ++$i):
    echo "Day $i = $day[$i]" . PHP_EOL ;
endfor;


// With For Each
$months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

// With index
foreach($months as $month){ // 
    echo "Month : $month " . PHP_EOL;
}

// Without index
foreach($months as $index => $month){ // Menggunakan index
    echo "Bulan ke-$index = $month " . PHP_EOL;
}

// Foreach with key value
$person = [
    "firstName" => "Muhammad",
    "MiddleName" => "Budi",
    "LastName" => "Kurniawan"
];

foreach($person as $key => $value){
    echo "$key = $value" . PHP_EOL;
}

?>