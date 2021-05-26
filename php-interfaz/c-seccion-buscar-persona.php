<?php


//este es el controlador---->muy importante

//aqui la vista

include( "Sesiones.php" );
Sesiones::verificar_sesion();

$seccion = "v-seccion-buscar-persona.php";
    
include( "v-plantilla.php" );
