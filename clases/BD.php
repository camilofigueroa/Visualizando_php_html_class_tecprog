<?php

    /**
     * Autor: Camilo Figueroa (Crivera)
     * Esta clase se encarga solo de la parte de bases de datos. Hay que recordar que dentro del MVC o modelo vista
     * controlador, unas clases deberían encargarse de los datos, otras de las lógica del negocio, y archivos de HTMl con CSS
     * serían encargados solo del aspecto. Para más información... revisar documentación sobre el modelo vista controlador.
     */

    class BD
    {
        
        /**
         * Este es el constructor. 
         *
         */
        public function BD()
        {
            
        }
        
        /**
         * Esta función se encarga de retornar la conexión para la base de datos.
         * @return          conección bd            Una conexión a base de datos.
         */
        public function conectar()
        {             
            return mysqli_connect( "localhost", "root", "", "bd_prueba" );
        }
        
        /**
         * Esta función se encarga de mostrar la información para cualquier tabla.
         * @return      recordset           Un arreglo con la información de la tabla.
         */
        public function procesar_info_tabla( $nombre_tabla )
        {
            $sql = " SELECT * FROM $nombre_tabla "; //Lo chévere del php es que puedo mezclar variables con texto de esta forma.
            $conexion = $this->conectar(); //Como esta función está dentro de la clase, se debe usar el this.
            $resultado = $conexion->query( $sql );
            $conexion->close(); //Es importante cerrar la conexión, al fin y al cabo lo que se va a usar ya está en resultado.
            
            return $resultado;
            
        }
    
    }



