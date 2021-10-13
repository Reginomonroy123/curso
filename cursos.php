k <?php include "conexion.php";?>
<?php
date_default_timezone_set('America/Mexico_City');
$fecha_actual=date("Y-m-d H:i:s");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>REGISTROS </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
	 <style>
      .table-striped>tbody>tr:nth-child(odd)>td, 
      .table-striped>tbody>tr:nth-child(odd)>th {
       background-color:  #fdfefe;
      }
      .table-striped>tbody>tr:nth-child(even)>td, 
      .table-striped>tbody>tr:nth-child(even)>th {
       background-color:  #fff5f5 ; 
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
				CURSO <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="./assets/img/avatar1.jpg" alt="UserIcon">
					<BR>
					<figcaption class="text-center text-titles">BIENVENIDO</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
                    <li>
						<a href="#!">
							<i class="zmdi zmdi-settings"></i>
						</a>
					</li>
					
                    <li>
                     <a href="home.php">
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
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> CURSOS ACTIVOS<small></small></h1>
			</div>
			<p class="lead"></div>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">
									<div  style="width:1300px; height:700px; overflow: scroll; margin-left: 50px">
									    <form action="cursos.php" method="POST"  autocomplete="off">
							            <table  class="table table-striped">
								           <thead>
										<tr style="background-color:#F44336;">
					            <th ><font color=#FDFEFE >CLAVE</th>
											<th ><font color=#FDFEFE >CURSO</th>
											<th ><font color=#FDFEFE >FECHA DE INICIO</th>
											<th ><font color=#FDFEFE >FECHA DE FIN</th>
											<th ><font color=#FDFEFE >NUMERO DE ESTUDIANTES</th>
											<th ><font color=#FDFEFE >DESCRIPCIÓN</th
										</tr>
										</thead>
									<tbody>
								</form>  
				<form action="consultar.php" method="POST"autocomplete="off">
	            CLAVE <input  size="10"  name="clave"  placeholder="clave" required>
                <input type = "submit"  style="background-color:#107acc;" value="INGRESAR" class="btn btn-success btn-raised btn-xs" name="btn6">
	           </form>
	     <BR>
			   
							<?php	 
							 
							$consulta = "SELECT * FROM cursos";
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
									<tr  style="font-size:80%;">
									<td>'.$fila[0].'</td>
									<td>'.$fila[4].'</td>
									<td>'.$fila[5].'</td>
									<td>'.$fila[6].'</td>
									<td>'.$fila[7].'</td>
									<td>'.$fila[8].'</td>
									

									</tr>
								   ';
								   $fila = mysqli_fetch_array($ejecutarconsulta);	
								}
							   }
							  }					
							  
							?>
										
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

