<?php include "conexion.php";?>
<?php
date_default_timezone_set('America/Mexico_City');
$fecha_actual=date("Y-m-d H:i:s");
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>ESTUDIANTES</title>
	<meta charset="UTF-8"></meta>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"&amp;gt;></meta>
	<link rel="stylesheet" href="./css/main.css">
	<style>
      .table-striped>tbody>tr:nth-child(odd)>td, 
      .table-striped>tbody>tr:nth-child(odd)>th {
       background-color:  #FFFFFF;
      }
      .table-striped>tbody>tr:nth-child(even)>td, 
      .table-striped>tbody>tr:nth-child(even)>th {
       background-color:#fff7f7; 
      }
      .table-striped>thead>tr>th {
           font-size:75%;
         background-color: #F44336;
      }
    </style>
</head>
<body>
<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				 <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="./assets/img/avatar2.jpg" alt="UserIcon">
					<br>
					<figcaption class="text-center text-titles">BIENVENIDO</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
          
					<li>
						<a href="#!" class="btn-exit-system">
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
                   <a href="home.php"><i class="zmdi zmdi-power"></i>SALIR</a>
                  </li>
				
			</ul>
		</nav>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-calendar-note zmdi-hc-fw"></i>LISTA DE ESTUDIANTES<small></small></h1>
			</div>
			<p class="lead"></div>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">
									<div style="width:1200px; height:500px; overflow: scroll; margin-left: 20px">
									    <form action="consultar.php" method="POST"  autocomplete="off">
							                   	<table class="table table-striped">

		                    <thead >
												<tr >
												<th ><font color=#FDFEFE >ID</th>
											  <th ><font color=#FDFEFE >NOMBRE</th>
												<th ><font color=#FDFEFE >APELLIDO PATERNO</th>
											  <th ><font color=#FDFEFE > APELLIDO MATERNO</th>						
	                      <th ><font color=#FDFEFE > CURSO</th>
												<th ><font color=#FDFEFE > INICIO</th>
												<th ><font color=#FDFEFE > TERMINO </th>
												<th ><font color=#FDFEFE > ASISTENCIA</th>
												<th ><font color=#FDFEFE > CALIFICACIÓN</th>
												<th ><font color=#FDFEFE > STATUS</th>
												<th ><font color=#FDFEFE > MODIFICAR</th>
												<th ><font color=#FDFEFE > ELIMINAR</th>
									
													<input type = "submit"  style="background-color:#107acc; font-size:80%;" value="REGRESAR" class="btn btn-success btn-raised btn-xs" name="btn15"> 
	                            	     								
										    </tr>
										    </thead>
									        <tbody>
                    </form>

			
	   <form action="eliminar.php" method="POST"autocomplete="off">
	            ID <input  size="10"  name="id"  placeholder="id" required>
                <input type = "submit"  style="background-color:#Ff0000;" value="BAJA" class="btn btn-success btn-raised btn-xs" name="btn9">
	           </form>
								           
									<?php	 
									if(isset($_POST['btn6']))
									{
									$clave = $_POST['clave'];
									$consulta = "SELECT a.*,b.* FROM alumnos a, cursos b WHERE b.clave = '$clave' and a.clave like b.clave ORDER by idalumno DESC limit 100";
									$ejecutarconsulta = mysqli_query($conexion,$consulta);
									$verfila = mysqli_num_rows($ejecutarconsulta);
									$fila = mysqli_fetch_array($ejecutarconsulta);

									if (!$ejecutarconsulta)
									{
										echo"error en la consulta";
									}else{
									if($verfila<1){
										
										echo "<tr><td>sin registros</td></tr>";
									}else {
										for ($i=0; $i<=$fila; $i++)
										{
									        echo'
											<tr style="font-size:80%;">
											<td>'.$fila[0].'</td>
											<td>'.$fila[1].'</td>
											<td>'.$fila[2].'</td>
											<td>'.$fila[3].'</td>
											<td>'.$fila[15].'</td>
											<td>'.$fila[16].'</td>
											<td>'.$fila[17].'</td>
											<td><font size=2.9 color= #2e86c1><b>'.$fila[9].'</td>
											<td><font size=2.9 color= #2e86c1><b>'.$fila[10].'</td>
                      <td><font size=2.9 color= #2e86c1><b>'.$fila[11].'</td>
											<td><a href="modificar.php?idalumno='.$fila[0].'"><button type="button" class ="btn btn-success">EVALUAR</button></a></td>
											<td><a href="eliminar.php"><button type="button" class ="btn btn-danger">BAJA</button></a></td>
											
											
											</tr>
										   ';
										  
										   $fila = mysqli_fetch_array($ejecutarconsulta);	
										   }
									        }
									      }	
									}			  
									?>

									
									             
									             <?php
									               if(isset($_POST['btn15']))
									               {
										            echo "<script>
										            self.location= 'cursos.php'
										            </script>";
									               }
									             ?>

									     <BR> <BR>
	
	                                  </tbody>
			                       </table>
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
 