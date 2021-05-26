<?php

include( "consultar.php" );
include( "Vimprimir.php" );

include( "Sesiones.php" );
Sesiones::verificar_sesion();

    $r = Consultas::consultar_personas();
    $r = Vimprimir::imprimir( $r );


//este es el controlador---->muy importante
//aqui la vista
    $seccion = "v-seccion.php";

    include( "v-plantilla.php" );
    
    