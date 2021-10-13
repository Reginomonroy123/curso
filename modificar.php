<?php include "conexion.php";?>

<?php
date_default_timezone_set('America/Mexico_City');
$fecha_actual=date("Y-m-d (H:i:s)");
?>


<!DOCTYPE html>
<html lang="es">
<head>
	<title>EVALUAR ESTUDIANTE</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
</head>
<body>
<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				BIENVENIDO <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="./assets/img/usuario.jpg" alt="UserIcon">
					<br>
					<figcaption class="text-center text-titles">EVALUACION DE ESTUDIANTE</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li>
						<a href="index.php" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
					 <li>
                     <a href="cursos.php">
                       <i class="zmdi zmdi-rotate-left zmdi-hc-fw"></i>
                     </a>
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->
        </div>
</section>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				<li>
					<a href="#!" class="btn-modal-help">
						<i class="zmdi zmdi-help-outline"></i>
					</a>
				</li>
			</ul>
		</nav>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> EVALUACIÓN <small></small></h1>
			</div>
			<p class="lead"></div>
			<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="background-color:#F44336">
					  	<li class="active"><a href="#new" data-toggle="tab">ESTUDIANTE</a></li>
		
					</ul>
						<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">
									<div style="width:1200px; height:700px; overflow: scroll; margin-left: 50px">


				                   
                                  <form action="modificar.php" method="POST" target="_blank" autocomplete="off" enctype="multipart/form-data">
                                  
										<div class="form-group" idalumno="idalumno">
										</div>
										<P class="text-muted"></i>DATOS DEL ESTUDIANTE<i class="zmdi "></i></p>
											<br>
										<div >
											  <label for="asistencia">ASISTENCIA &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
											  <input name="asistencia"  type="text" id ="asistencia" >
											</div>
											<br>

											<div >
											  <label for="calificacion">CALIFICACIÓN &nbsp; &nbsp; &nbsp;</label>
											  <input name="calificacion"  type="text" id ="calificacion" required>
											</div>
											
											<BR>
										    <p >
		                                     <botton>
											<input   type="submit"  value= "GUARDAR"  style="background-color:#107acc; margin-left: 100p" class="btn btn-success btn-raised btn-xs" name = "btn1">
											</botton>
										    </p>
											
									    </form>
<?php 

 if(isset($_POST['btn1'])  )
 {

$asistencia = $_POST['asistencia'];
$calificacion = $_POST['calificacion'];


	$sentencia= "UPDATE alumnos SET '$asistencia' like asistencia, '$calificacion' =calificacion WHERE asistencia = '' ";
	$resultado=mysqli_query($conexion,$sentencia);

	 if(mysqli_query($conexion,$sentencia)) 
									      {
									         echo 'registro actualizado' ;
								          }
								          else
								          {
								
								          }
}

?>




									    </thead>
									<tbody>
									</tbody>
								</table>
							
							</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include "scripts.php";?>
</body>
</html>


