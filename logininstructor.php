<?php include "conexion.php";?>
<head>
	<title>login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
	
</head>
<body class="cover" style="background-image: url(./assets/img/login.png);">

	<form  method="POST"  autocomplete="off" class="full-box logInForm">
	      <div class="full-box dashboard-sideBar-UserInfo">
				<figure class="text-center" class="full-box">
					<img src="./assets/img/usuario.jpg" alt="UserIcon">
					<figcaption class="text-center text-titles"> Inicia sesión</figcaption>
				</figure>
				</div>
		<div class="form-group label-floating">
		  <label style= "font-size:10pt;" class="control-label zmdi-account-box-mail zmdi" for="correo"><font face="arial"> E-MAIL</label>
		  <input class="form-control" name="correo1" id="correo1" type="email" style="width:280px;height:50px;font-size:12pt;color:white" >
		  <p class="help-block">Escribe tú E-mail</p>
		</div>
		
		<div class="form-group label-floating">
		  <label style= "font-size:10pt"class="control-label zmdi-lock-outline zmdi " for="pass">  <font face="arial">PASSWORD</label>
		  <input class="form-control"  name="pass1"  id="pass1" type="password"  style="width:280px;height:50px;font-size:12pt;color:white">
		  
		  <p class="help-block">Escribe tú contraseña</p>

		
    </div>
		</div>
						  
		<div class="form-group text-center">
		
			<input type="submit"  style="background-color:#107acc;" value="INICIAR" class="btn btn-raised btn-danger" name = "btn9">

			
		</div>
	</form>

	<?php
session_start();
if(isset($_POST['btn9'])  )
{
			$_SESSION['correo1'] =$_POST['correo1'];
			$correo1 = $_SESSION['correo1'];
			$_SESSION['pass1'] = $_POST['pass1'];
			$pass1 = $_SESSION['pass1'];
	$consulta =  "SELECT correo1,pass1 FROM cursos WHERE correo1 = '$correo1' AND pass1 = '$pass1' LIMIT 1";  
	$ejecutarconsulta = mysqli_query($conexion,$consulta);

if(!$ejecutarconsulta){ 
  print '<script language="JavaScript">';
  print 'alert("¡¡¡ERROR DE CONSULTA!!!");';
  print '</script>';
  echo "<script>
  self.location= 'logininstructor.php'
  </script>"; 
} 
if($pass1 = mysqli_fetch_assoc($ejecutarconsulta)) {	
	echo "<script>
	self.location= 'home.php'
	</script>";
} else {
print '<script language="JavaScript">';
  print 'alert("¡¡¡ERROR USUARIO O CONTRASEÑA INCORRECTO INTENTA DE NUEVO!!!");';
  print '</script>';
	echo "<script>
	self.location= 'logininstructor.php'
	</script>";


}
}
?>

    

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