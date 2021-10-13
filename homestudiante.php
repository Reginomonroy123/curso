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
			
	<?php include "menuestudiante.php";?>
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
			  <h1 class="text-titles">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BIENVENIDO<small></small></h1>
			</div>
		</div>
		
			<article  style="margin-left: 70px"; class="full-box tile" >
				<div style="background-color:#F44336;" class="full-box tile-title text-center  ">
				<a  href=""  ><font color=#FDFEFE>UNIRSE A UN CURSO</a>
				</div>
				<br>	<br>
             </article>
				<form   action="homestudiante.php" method="POST"autocomplete="off">
	            CLAVE DEL CURSO  <input   size="10"  name="clave"  placeholder="clave" required>
                <input type = "submit"  style="background-color:#107acc;" value="CURSO" class="btn btn-success btn-raised btn-xs" name="btn6" >
	           </form>
	        
                
<?php

   if(isset($_POST['btn6'])  )
   {
  $clave = $_POST['clave'];
 
     		 
			$insertardatos = "UPDATE  a.*,b.* FROM  alumnos a, cursos b Set a.clave='$clave' Where b.clave='$clave'";			
			$ejecutardatos = mysqli_query($conexion,$insertardatos);
	
						  if(!$ejecutardatos) 
									      {
									         echo "error de consulta";
								          }
							if($_POST['clave'] = mysqli_fetch_assoc($ejecutardatos)) 
								{	
								print '<script language="JavaScript">';
								print 'alert("¡¡¡te has unido exitosamente a un curso!!!");';
								print '</script>';
								echo "<script>
								self.location= 'homestudiante.php'
								</script>";
							    }
							   else{

								print '<script language="JavaScript">';
								print 'alert("¡¡¡CLAVE DE CURSO ERRONEA!!!");';
								print '</script>';
								echo "<script>
								self.location= 'homestudiante.php'
								</script>";
							   }		

						}
						?>


		
		</div>
		
		</div>
	</section>

	<?php include "scripts.php";?>
</body>
</html>