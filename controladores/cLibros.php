<?php
require_once("modelos/mLibros.php");
$libros = new mLibros();

$datos = $libros ->getLibros();

require_once("vistas/vLibros.php");
  
?>