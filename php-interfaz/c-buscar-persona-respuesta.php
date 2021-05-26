<?php

    $b = $_GET[ 'nombre_buscado' ];

    include( "consultar.php" );
    include( "Vimprimir.php" );
    include( "Sesiones.php" );
    Sesiones::verificar_sesion();

    $r = consultas::consultar_persona_nombre( $b );
    $r = Vimprimir::imprimir( $r );
    //echo $r;

    $seccion = "v-buscar-persona-respuesta.php";
    
    include( "v-plantilla.php" );
