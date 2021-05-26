<?php


    //include( "funciones-de-prueba.php" );

    //echo autenticacion( "222222", "123" );

    include( "consultar.php" );
    include( "Vimprimir.php" );
    $r = consultas::autenticacion( "222222", "123" );
    //$r = consultas::autenticacion( "654645", "123" );
    //echo Vimprimir::imprimir( $r );
    echo Vimprimir::imprimir( $r, 1 );