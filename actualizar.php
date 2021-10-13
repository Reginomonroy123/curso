<?php include "conexion.php";

 if(isset($_POST['btn1'])  )
 {

$a = $_POST['asistencia'];
$b = $_POST['calificacion'];
$c = $_POST['idalumno'];

	$sentencia= "UPDATE alumnos SET asistencia ='$a', calificacion='$b' WHERE idalumno='$c' ";
	$resultado=mysqli_query($conexion,$sentencia);

	 if(!$resultado) 
									      {
									         echo "error de consulta";
								          }
								          else
								          {
								print '<script language="JavaScript">';
								print 'alert("¡¡¡DATOS GUARDADOS EXITOSAMENTE!!!");';
								print '</script>';
								echo "<script>
								self.location= 'cursos.php'
								</script>";
								          }
}

?>