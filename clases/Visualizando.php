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
         * @param       número                  1 o 0 dependiendo de si quiere ver los resultados en una tabla o no.
         * @return      texto                   Un html que contiene los valores de la base de datos.
         */
        public function retornar_vista_consulta( $resultado_consulta, $sn_tabla = null )
        {
            $salida = "";
            $i = 0;
            
            //Esta decisión se encarga de ejecutar el proceso, siempre y cuando haya resultados.
            if( $resultado_consulta->num_rows > 0 )
            {
                if( $sn_tabla != null ) $salida .= "<table border='1px'>";                
                
                while( $fila = mysqli_fetch_array( $resultado_consulta ) )
                {
                    if( $sn_tabla != null ) $salida .= "<tr>";
                    
                    for( $i = 0; $i < mysqli_num_fields( $resultado_consulta ); $i ++ )
                    {
                        if( $sn_tabla != null ) $salida .= "<td>";
                        $salida .= $fila[ $i ];
                        if( $sn_tabla != null ) $salida .= "</td>";
                    }
                    
                    if( $sn_tabla != null ) $salida .= "</tr>";
                }
                
                if( $sn_tabla != null ) $salida .= "</table>";
                
            }else{
                
                $salida = "No se encontraron resultados.";
            }
            
            return $salida;                        
        }
    }



