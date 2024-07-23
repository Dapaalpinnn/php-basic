<?php 

// Switch Statement => Hanya untuk perbandingan (==) 

$nilai = "D";
switch ($nilai):
    case "A":
        echo "Congratulations, you passed well";
        break;
    case "B":
    case "C":
        echo "Congratulations, you're passed";
        break;
    case "D":
        echo "Sorry, Try again later";
        break;
    default:
        echo "Sorry";
endswitch;

?>