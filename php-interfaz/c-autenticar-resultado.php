<?php

    $b = $_GET[ 'nombre_buscado' ];

    include( "consultar.php" );
    include( "Vimprimir.php" );
    include( "Sesiones.php" );
    Sesiones::verificar_sesion();

    $documento = $_POST[ 'documento' ];
    $clave = $_POST[ 'clave' ];

    //$r = Consultas::consultar_citas_medicas();
    //$r = consultas::consultar_persona_nombre( $b );
    //$r = Vimprimir::imprimir( $r );
    //echo $r;
    $r = Consultas::autenticacion( $documento, $clave );

    if( Vimprimir::imprimir( $r, 1 ) == "1" )
    {
        $_SESSION[ 'usuario' ] = $documento;
        header( "location: c-seccion.php" );

    }else{
            header( "location: c-autenticacion.php" );
        }