<?php

    /**
     * Autor: Camilo Figueroa (Crivera)
     *
     */

    class Visualizando
    {
        
        /**
         * Este es el constructor. 
         *
         */
        public function Visualizando()
        {
            
        }
        
        /**
         * Esta función se encargará de imprimir cualquier resultado de cualquier consulta.
         * @param       recordset               El resultado de una consulta como recordset.
         * @return      texto                   Un html que contiene los valores de la base de datos.
         */
        public function retornar_vista_consulta( $resultado_consulta )
        {
            $salida = "";
            $i = 0;
            
            //Esta decisión se encarga de 
            if( $resultado_consulta->num_rows > 0 )
            {
                while( $fila = mysqli_fetch_array( $resultado_consulta ) )
                {
                    for( $i = 0; $i < mysqli_num_fields( $resultado_consulta ); $i ++ )
                    {
                        $salida .= $fila[ $i ];
                    }
                }               
                
            }else{
                
                $salida = "No se encontraron resultados.";
            }
            
            return $salida;                        
        }
    }



