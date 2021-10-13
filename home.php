<?php include "conexion.php";?>
<!DOCTYPE php>
<php lang="es">
<head>
	<title>INICIO</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
</head>
<body>
			
	<?php include "menu.php";?>
	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
			</ul>
		</nav>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"> <i class="zmdi zmdi-calendar-check"></i>BIENVENIDO<small></small></h1>
			</div>
		</div>
		
			<article class="full-box tile" >
				<div  style="background-color:#F44336;" class="full-box tile-title text-center  ">
				<a  href="cursos.php"  ><font color=#FDFEFE>CURSOS</a>
				</div>
				<br>	<br>
				<div class="full-box text-center">
				 <a href="cursos.php"><img src="./assets/img/cursos_opt.jpg" alt="user-picture"></a>
				</div>
			</article>
		</div>
		
		</div>
	</section>

	<?php include "scripts.php";?>
</body>
</html>