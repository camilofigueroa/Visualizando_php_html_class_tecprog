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
            $obj_visual = new Visualizando(); //Visualizando puede usar los métodos de BD por herencia.
            
            //Se elimina la parte de la base de datos porque de eso se va a encargar otra clase.

            //Resultado vuelve a tomar todo lo de la tabla resultados, pero mejor, desde una clase.
            //Todo ese código queda encapsulado, es decir, escondido y no hiere la retina.
            $resultado = $obj_visual->procesar_info_tabla( "tb_usuarios" );

            //La siguiente línea pinta los resultados de la consulta en una tabla HTML.
            echo $obj_visual->retornar_vista_consulta( $resultado, 1 );

            //---------en teoría... ya se podría usar con cualquier tabla.

        ?>

    </body>
</html>