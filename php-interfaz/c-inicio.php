<?php

include( "Sesiones.php" );
Sesiones::verificar_sesion();
$seccion = "v-inicio.php";
    
include( "v-plantilla.php" );