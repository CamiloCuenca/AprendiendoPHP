<?php

// include hace que php tome el archvio y cargue TODO su contenido

include ("library.php");  // Este es un ejmplo suponiendo que existe Library.php y que tiene mushcas funciones.

// Es mas recomendable para evitar errores de inclusiones anidadas o de que se incluya 2 veces el mismos archvii
// usar mejro include_once
include_once ("library.php");

?>