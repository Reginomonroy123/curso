<?php
include ("conexion.php");
if(isset($_POST['btn9']))
{
$id = $_POST['id'];
mysqli_query($conexion,"DELETE FROM alumnos WHERE idalumno = $id");
print '<script language="JavaScript">';
print 'alert("¡¡¡SE HA DADO DE BAJA EL ESTUDIANTE !!!");';
print '</script>';
  echo "<script>
  self.location= 'cursos.php'
  </script>";

}else{
    echo "error de eliminacion"; 
}

?>
