<?php include "conexion.php";?>
<?php
date_default_timezone_set('America/Mexico_City');
$fecha_actual=date("Y-m-d (H:i:s)");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>REGISTRO ESTUDIANTE</title>
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
					<figcaption class="text-center text-titles">REGISTRO DE ALUMNOS</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li>
						<a href="index.php" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
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
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> REGISTRO<small></small></h1>
			</div>
			<p class="lead"></div>
			<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="background-color:#F44336">
					  	<li class="active"><a href="#new" data-toggle="tab">ALUMNO NUEVO</a></li>
		
					</ul>
						<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">
									<div style="width:1200px; height:700px; overflow: scroll; margin-left: 50px">
				                   
                                  <form action="registroalumno.php" method="POST" target="_blank" autocomplete="off" enctype="multipart/form-data">
										<div class="form-group" idalumno="idalumno">
										</div>
										<P class="text-muted"></i>DATOS DEL ALUMNO<i class="zmdi "></i></p>
										<div class="form-group ">
										
											  <label for="nombre">NOMBRE</label>
											  <input name="nombre" class="form-control" type="text" id ="nombre" required>
											</div>
											<div class="form-group ">
											  <label for="apaterno">APELLIDO PATERNO</label>
											  <input name="apaterno" class="form-control" type="text" id ="apaterno" required>
											</div>
											

											<div class="form-group ">
											  <label for="amaterno">APELLIDO MATERNO</label>
											  <input name="amaterno" class="form-control" type="text" id ="amaterno" required>
											</div>

											<div class="form-group label-floating">
											  <label for="direccion">DIRECCIÓN</label>
											  <input placeholder="Calle..Colonia..Municipio..Estado" name="direccion" class="form-control" type="text" id ="direccion" required>
											</div>
											<div class="form-group label-floating">
											  <label for="telefono">TELEFONO</label>
											  <input name="telefono" class="form-control" type="text" id ="telefono" required>
											</div>
											<div class="form-group label-floating">
										        <label class="control-label" for="correo">E-MAIL</label>
												<input name="correo" class="form-control" type="email" id ="correo" required>
										    </div>
											<div class="form-group label-floating">
										        <label class="control-label"  for="pass">PASSWORD</label>
												<input name="pass" class="form-control" type="password" id ="pass" required>
										    </div>

                                             <div class="form-group label-floating">
											  <label for="clave">CLAVE DEL CURSO QUE DESEA ENTRAR</label>
											  <input name="clave" class="form-control" type="text" id ="clave" required>
											</div>

										    <p class="text-center">
		                                     <botton>
											<input   type="submit"  value= "Enviar"  style="background-color:#107acc;" class="btn btn-success btn-raised btn-xs" name = "btn1">
											</botton>
										    </p>
											
									    </form>


<?php

function comprobar_email($correo) {
    return (filter_var($correo, FILTER_VALIDATE_EMAIL));
}

   if(isset($_POST['btn1'])  )
   {
 
  $nombre = $_POST['nombre'];
  $apaterno = $_POST['apaterno'];
  $amaterno = $_POST['amaterno'];
  $direccion =  $_POST['direccion'];
  $telefono = $_POST['telefono'];
  $correo = $_POST['correo'];
  $pass = $_POST['pass'];
  $clave = $_POST['clave'];
 
    		 
			$insertardatos = "INSERT INTO alumnos VALUES(null,'$nombre','$apaterno','$amaterno','$direccion','$telefono','$correo','$pass','$clave','','','')";	
			$ejecutardatos = mysqli_query($conexion,$insertardatos);
                          
         $consulta = "SELECT clave FROM  cursos where clave like '$clave'";
		  $ejecutarconsulta = mysqli_query($conexion,$consulta);
			
			  if(!$ejecutarconsulta) 
									      {
									         echo "error de consulta";
								          }
							if($_POST['clave'] = mysqli_fetch_assoc($ejecutarconsulta)) 
								{	
								print '<script language="JavaScript">';
								print 'alert("¡¡¡REGISTRO EXITOSO!!!");';
								print '</script>';
								echo "<script>
								self.location= 'index.php'
								</script>";
							    }
							   else{

								print '<script language="JavaScript">';
								print 'alert("¡¡¡CLAVE DEL CURSO INEXISTENTE!!!");';
								print '</script>';
								echo "<script>
								self.location= 'registroalumno.php'
								</script>";
							   }		

						}
						   ?>
									</div>
								</div>
							</div>
						</div>
					  	
							</div>
					  	</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include "scripts.php";?>
</body>
</html>
