<?php

//definir una constante usando define():
define("NOMBRE_CONSTANTE", "Valor de la constante");
echo NOMBRE_CONSTANTE. "<br>" ;

// definir una constante usando const: 
const NOMBRE_CONSTANTE2 = "Valor de la constante 2";
echo NOMBRE_CONSTANTE2 . "<br>" ;


// Lista de constamntes mas usadas ya definidas en PHP
echo"Versión de PHP: ". PHP_VERSION . "<br>";
echo"Sistema operativo: ". PHP_OS . "<br>";
echo"Secuencia de fin de línea: ". PHP_EOL . "<br>";
echo"Ruta completa del archivo: ". __FILE__. "<br>";
echo"Directorio del archivo: ". __DIR__. "<br>";
echo"Número de línea actual: ". __LINE__. "<br>";


?>