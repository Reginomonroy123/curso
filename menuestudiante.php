<!-- SideBar -->
<!-- SideBar -->
<?php include "conexion.php";?>
<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				CURSOS <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
                  
			 <?php 
              require_once 'tiempoestudiante.php';  

                       if ( isset( $_SESSION['correo'] ) ) 
                       {
                              // Sesión activa
				        }
				        else{
				                        // Sesión inactiva  
				                        print '<script language="JavaScript">';
                                       print 'alert("¡¡¡HA ECXEDIDO EL TIEMPO DE SESIÒN!!!");';
                                        print '</script>';
                                        echo "<script>
                                      self.location= 'logininstructor.php'
                                         </script>";
				             }
                       
              ?>
   
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="./assets/img/avatar1.jpg" alt="UserIcon">
					<BR>
					<figcaption class="text-center text-titles"> <?php echo $correo; ?></figcaption>
				</figure>
				<br>
				<ul class="full-box list-unstyled text-center">
					
					<li>
						<a href="index.php" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->
<ul class="list-unstyled full-box dashboard-sideBar-Menu">
    <li>
        <a href="homestudiante.php">
            <i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> MENU
        </a>
    </li>

</ul>
</div>
</section>
