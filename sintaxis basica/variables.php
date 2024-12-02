<?php 

    // Variable super global
    $came_from = $_SERVER['HTTP_REFERER']; // esta forma puede ser insegura

    $came_from_segura =htmlentities($_SERVER['HTTP_REFERER']); // Esta forma es muvho mas segura


    // Varable global
    global $nombreglobal;
    $nombreglobal = "PEDRO";
    echo"".$nombreglobal."\n";

    // Variables estaticas (static)
    static $nombreStatco = "Jose";
    echo "".$nombreStatco."\n";

    // Declaro la varibale
    $nombre ;

    //Inicializo a variable
    $nombre = "Juan";

    // Imprimo el contenido de a variables
    echo $nombre;


    // Declaración e inicializacion en una sola linea
    $nombre2 = "Juan2";

    // Declaración de asignación multiple
    $level = $score = $time = 0;
    echo"".$level."\n";
    echo "".$score."\n";
    echo "".$time."\n";
?>
