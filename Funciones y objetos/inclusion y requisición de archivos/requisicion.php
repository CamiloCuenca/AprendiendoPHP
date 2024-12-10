<?php

/**
 * Un gran problema con usar include e include_once es que PHP
 * solo intentará incluir el archvio solicitado. La ejecución del programa
 * continúa incluso si no se encuentra el archvio.
 */

 // Cuando sea  absolutamente imprecindible utilizar un archivo se usa require
 require("library.php");

 // Asi mismo como en la inclusion para la requisición existe el requiere_once
 require_once("librery.php");


?>