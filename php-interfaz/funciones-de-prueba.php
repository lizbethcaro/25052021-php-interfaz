<?php

function autenticacion( $documento, $clave )
        {
            include( "Conexion.php" );

            $salida = "";

            $conexion = Conexion::conectar();
        
            //Esta clase es del modelo.
            $sql  = " SELECT 1 ";
            $sql .= " FROM tb_personas ";
            $sql .= " WHERE documento = '$documento' ";
            $sql .= " AND clave = '$clave' ";
            //echo $sql;
            $resultado = $conexion->query( $sql );

            while( $fila = mysqli_fetch_array( $resultado ) )
            {
                $salida = $fila[ 0 ];
            }

            //return $resultado;

            return $salida;
        }