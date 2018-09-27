<!--
        Autor: Camilo Figueroa (Crivera)

-->

<html>
    <head>
        <title></title>
    </head>

    <body>

        <?php

            include( "clases/Visualizando.php" );
            $obj_visual = new Visualizando();
            

            //Esta parte de la conexión no debería estar aquí pero es un ejercicio
            $conexion = mysqli_connect( "localhost", "root", "", "bd_prueba" );
            $sql = "SELECT * FROM tb_usuarios";
            $resultado = $conexion->query( $sql );
            
            //La siguiente línea pinta los resultados de la consulta.
            //echo $obj_visual->retornar_vista_consulta( $resultado );

            //La siguiente línea pinta los resultados de la consulta en una tabla HTML.
            echo $obj_visual->retornar_vista_consulta( $resultado, 1 );

        ?>

    </body>
</html>