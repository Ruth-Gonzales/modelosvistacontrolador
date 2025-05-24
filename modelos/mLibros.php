<?php
    class mLibros{
        private $datosBD;
        private $libros;
    

        function __construct(){
            $this->datosBD= conexion::conexion();
            $this->libros=array();
        }
    
        public function getLibros(){
            $consulta =$this->datosBD->query("SELECT * FROM libros");
        /**creamkos la matris de datos (Arreglo) */
            while($filas=$consulta-> fetch_assoc()){
                $this->libros[]=$filas;
            }
            return $this->libros;
        }

    }
?>