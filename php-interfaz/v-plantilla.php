<!DOCTYPE html>
<html lang="en">
    <head>

        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">

        <title>Documento</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="css/estilo.css">

        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
    </head>

    <body>


        <?php include("v-menu.php"); ?>

        <div class="container"><!--Ojo con este contenedor, este es el principal-->

            <?php include( $seccion ); ?>

        </div> <!-- /container -->
        
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap-collapse.js"></script>
            
    </body>
</html>