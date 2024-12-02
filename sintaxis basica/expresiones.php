<?php

// y = 3 (|2x|) + 4

$x = 1;
$y = 3 * (abs(2 * $x)+4);

echo $y . "\n";


$day_number = 365;
$days_to_new_year = 366 - $day_number; // Expresión

if($days_to_new_year < 30){
    echo "Not long now till new year";
}




?>