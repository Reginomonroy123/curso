<!DOCTYPE php>
<php lang="es">
<head>
	<title>login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
</head>
        <body class="cover" style="background-image: url(./assets/img/login.png);">
<!--
          <h1 align="center" style="background-color:FF0000;" ><i><font color="white"  face="arial" >BIENVENIDO </i></h1>

	      <div class="full-box dashboard-sideBar-Menu">
				<figure class="text-center" class="full-box">
					<img src="./assets/img/linix.jpg" alt="UserIcon">
					<figcaption class="text-center text-titles"><font size=4  color="white" face="arial" > </figcaption>
				</figure>
				</div>
				<br><br>
	-->
	<form method="" autocomplete="off" class="full-box logInForm">
<!--class="mainmenu clearfix"
   -->
	<ul class="full-box dashboard-sideBar-Menu">
	
		<li>
	   <a href=""><i class="zmdi zmdi-account-circle zmdi-hc-fw"></i> INICIAR SESIÓN</a>
      </li>

        <li><a href="logininstructor.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i>Instructor</a></li>
		      <li><a href="loginalumno.php"><i class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i>Estudiante</a></li>


       <li> <a href=""><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>INSCRIBIRSE</a> </li>
		          
		     <li><a href="registrocurso.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i>Intructor</a></li>
		     <li><a href="registroalumno.php"><i class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i>Estudiante</a></li>
		          
        
	   </ul>

	</form>  

	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>