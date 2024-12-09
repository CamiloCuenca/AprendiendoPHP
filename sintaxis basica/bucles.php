<?php

// Bucle whilw
$count = 1;
while ($count <= 12) {

   echo "$count times 12 is " . $count * 12 . "<br>";
    ++$count;
}

// Bucle do while
$count2 = 2;
do{
    echo "$count2 times 12 is " . $count2 * 12;
    echo "<br>";
}while ( ++$count2 <= 12 );

// Bucle for

$count3 = 1;

for ($i = 1 ; $i <= 12 ; ++$count3){
    //echo "$count3 times 12 is " . $count3 * 12 . "<br>";
    // para cerrar un bucle for se utiliza: fclose()
    // el continue para saltar a la siguiente iteración
}


?>