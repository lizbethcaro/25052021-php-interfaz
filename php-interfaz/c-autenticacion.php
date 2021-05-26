<?php

include( "Sesiones.php" );

Sesiones::iniciar_sesion();
$_SESSION[ 'usuario' ] = "";

$seccion = "v-autenticacion.php";
    
include( "v-plantilla.php" );