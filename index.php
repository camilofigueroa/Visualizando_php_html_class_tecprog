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
            
            $conexion = mysqli_connect( "localhost", "root", "", "bd_prueba" );
            $sql = "SELECT * FROM tb_usuarios";
            $resultado = $conexion->query( $sql );

            echo $obj_visual->retornar_vista_consulta( $resultado );

        ?>

    </body>
</html>