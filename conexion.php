<?php
$host  = "localhost";
$bd = "cursos";
$usuario = "root";
$clave = "";

$tabla_alumnos = "alumnos";
$tabla_cursos = "cursos";

$conexion = mysqli_connect($host,$usuario,$clave,$bd);	
if(!$conexion)
{
	echo"error en la conexion";
}
  $base_url='http://www.youwebsite.com/email_activation/';  
?>
