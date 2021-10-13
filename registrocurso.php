<?php include "conexion.php";?>
<?php
date_default_timezone_set('America/Mexico_City');
$fecha_actual=date("Y-m-d (H:i:s)");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>CURSOS</title>
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
					<img src="./assets/img/avatar1.jpg" alt="UserIcon">
					<BR>
					<figcaption class="text-center text-titles">CURSOS</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li>
						<a href="#!">
							<i class="zmdi zmdi-settings"></i>
						</a>
					</li>
					<li>
						<a href="#!" class="btn-exit-system">
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
			  <h1 class="text-titles"><i class="zmdi zmdi-book zmdi-hc-fw"></i>CURSO<small></small></h1>
			</div>
			<p class="lead"></div>
			<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="background-color:#F44336">
					  	<li class="active"><a href="#new" data-toggle="tab">NUEVO CURSO</a></li>
		
					</ul>
		             <div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">
									<div style="width:1200px; height:700px; overflow: scroll; margin-left: 50px">
				                   
                                  <form action="registrocurso.php" method="POST" target="_blank" autocomplete="off" enctype="multipart/form-data">
										<div class="form-group" id="id">
										</div>
										
											<P class="text-muted"></i>DATOS DEL CURSO<i class="zmdi "></i></p>
										        <div class="form-group ">
										
											  <label for="nombre">NOMBRE COMPLETO DEL INTRUCTOR</label>
											  <input name="nombre" class="form-control" type="text" id ="nombre" required>
											    </div>

											    <div class="form-group label-floating">
										        <label class="control-label" for="correo1">E-MAIL</label>
												<input name="correo1" class="form-control" type="email" id ="correo1" required>
										    </div>
											<div class="form-group label-floating">
										        <label class="control-label"  for="pass1">PASSWORD</label>
												<input name="pass1" class="form-control" type="password" id ="pass1" required>
										    </div>


											<div class="form-group"autocomplete="off">
											  <label for="nombrecurso">NOMBRE DEL CURSO</label>
											  <input name="nombrecurso"   class="form-control" type="text" id ="nombrecurso" required>
											</div>
									
											 <div class="form-group">
											 <label for="fecha1">  FECHA DE INICIO </label>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;<label class="zmdi zmdi-calendar zmdi" ></label>
											 <input name="fecha1" type="date" id ="fecha1" required>
                                                 &nbsp; &nbsp;&nbsp; &nbsp;
                                                 <br>
                                             </div>

                                              <div class="form-group">
											 <label for="fecha2">  FECHA DE TERMINO </label>&nbsp; &nbsp;<label class="zmdi zmdi-calendar zmdi" ></label>
											 <input name="fecha2" type="date" id ="fecha2" required>
                                                 &nbsp; &nbsp;&nbsp; &nbsp;
                                                 <br>
                                             </div>

                                               <div class="form-group"autocomplete="off">
											  <label for="numeromax">NUMERO MAXIMO DE ALUMNOS</label>
											  <input name="numeromax"   class="form-control" type="text" id ="numeromax" required>
											</div>

                                             <div class="form-group"autocomplete="off">
											  <label for="descripcion">DESCRIPCIÓN DEL CURSO</label>
											  <input name="descripcion"   class="form-control" type="text" id ="descripcion" required>
											</div>

											  <div class="form-group"autocomplete="off">
											  <label for="clave">CLAVE DEL CURSO</label>
											  <input name="clave"   class="form-control" type="text" id ="clave" required>
											</div>
										
										    <p class="text-center">
		                                     <botton>
											<input   type="submit"  value= "Enviar"  style="background-color:#107acc;" class="btn btn-success btn-raised btn-xs" name = "btn1">
											</botton>
										    </p>
											
									    </form>


<?php

   if(isset($_POST['btn1'])  )
   {
 
  
  $nombre = $_POST['nombre'];
  $correo1 = $_POST['correo1'];
  $pass1 = $_POST['pass1'];
  $nombrecurso = $_POST['nombrecurso'];
  $fecha1 = $_POST['fecha1'];
  $fecha2 = $_POST['fecha2'];
  $numeromax = $_POST['numeromax'];
  $descripcion = $_POST['descripcion'];
  $clave = $_POST['clave'];
 
     		 
			$insertardatos = "INSERT INTO cursos VALUES('$clave','$nombre','$correo1','$pass1','$nombrecurso','$fecha1','$fecha2','$numeromax','$descripcion')";			
			$ejecutardatos = mysqli_query($conexion,$insertardatos);
			print '<script language="JavaScript">';
			print 'alert("¡¡¡SE HAN INSERTADO CORRECTAMENTE LOS DATOS!!!");';
			print '</script>';
			echo "<script>
			self.location= 'index.php'
			</script>";
				  if(!$ejecutardatos)
				 {
				   echo "error de linea"; 
				 }
		
		
			  else
			  {
      print '<script language="JavaScript">';
      print 'alert("¡¡¡EL CORREO ES INVALIDO O FALTA LLENAR CAMPOS!!!");';
      print '</script>';
	  echo "<script>
        self.location= 'registrocurso.php'
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
	</section>

	<?php include "scripts.php";?>
</body>
</html>
