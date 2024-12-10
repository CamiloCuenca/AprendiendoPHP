<?php

class User {

    public $name , $password;

    function save_user(){
        echo " Save User code goes here <br>";
    }

}


$object = new User; 
print_r($object); echo "<br>";

$object -> name = "Juan";  // Esta es la sintaxis para acceder a una propiedad de un objeto
$object -> password = "123%cam";
print_r($object); echo "<br>";

$object -> save_user(); // Esta es la sintaxis para acceder a un método de un objeto ( Es igual que para una propiedad)


/**
 * Si yo creo 2 objetos y el segundo lo hago utilizando el primero
 * $object1 = new User();
 * $object2 = $object1;
 * 
 * pues cuando yo inserte los valores a la propiedades del primer objeto y luego le inserte otros al segundo lo que sucede
 * es que cambiara para ambos tanto para el primer objeto como para el segundo.
 * 
 * Para evitar eso lo que debemos de hacer es una copia del objeto 1 y utilizarlo en el objeto 2
 */

 //Objeto 1 
 $object1 = new user();
 $object1 -> name = "Carlos";
 $object1 -> password = "00012sq";
 print_r($object1); echo "<br>";

 //Objeto 2
 $object2 = clone $object1; // En esta linea clono el objeto 1
 $object2 -> name = "Pedro"; // En esta linea cambio el nombre por Pedro
 print_r($object2); echo "<br>";
 

 /**Cabe aclarar que es en caso de que necesitemos informacion especifica del objeto uno
 *si ese no es el caso podemos simplemente crear un nuevo objet $object3 = new User();
 */
?>