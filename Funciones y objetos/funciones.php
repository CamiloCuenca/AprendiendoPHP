<?php 

// Ejemplo de 3 funciones que se usan en cadenas:
echo strrev ( " . dlrow olleh"); // Revierte la cadena
echo str_repeat("hip ",2); // Repite la cadena
echo strtoupper("hooray"); // Convierte a cadena a MAYUSCULAS


// sintxis general de una función:
/**
 *  function function_name([parameter[, ...]]){     
 *  // Statements
 * }
 */

 // Ejemplo de función

 echo fix_names("WILLIAM" , "henry" , "gasES");

 /**  Esta función toma un nombre de un usuario y los convierte en minusculas y 
  * posteiormente coloca en mayuscul la primera letra de cada nombre y apellido
  *
  * @param mixed $n1
  * @param mixed $n2
  * @param mixed $n3
  * @return string
  */
 function fix_names($n1 , $n2 , $n3){ 
    $n1 = ucfirst(strtolower($n1));
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));

    return "<br>". $n1 . " " . $n2 . " " . $n3;
 }


 // Haro el mismo ejemplo pero dovolviendo varios valores en una matriz

 $names = fix_names2("WILLIAM" , "henry" , "gasES");
 echo "<br>" . $names [0] ." ". $names[1] ." ". $names [2] ;
 function fix_names2($n1 , $n2 , $n3){
    $n1 = ucfirst(strtolower($n1));
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));

    return array($n1 , $n2 , $n3); // En esta linea retornamos los nombres como una matriz unidimensional
 }

?>