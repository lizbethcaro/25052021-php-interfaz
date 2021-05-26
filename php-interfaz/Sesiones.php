<?php

    class Sesiones
    {
        public static function iniciar_sesion()
        {
            if( !isset( $_SESSION ) ) session_start();
        } 

        public static function verificar_sesion()
        {
            self::iniciar_sesion();

            if( isset( $_SESSION[ 'usuario' ] ) )
            {
                if( $_SESSION[ 'usuario' ] == "" )
                {
                    header( "location: c-autenticacion.php" );
                }
            }
        }
    } 