<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../img/logito.ico"/>
		<title>GrafikHeredia</title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/animate.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/font-awesome.css">
	<link rel="stylesheet" href="../css/responsive.css">
	<link href="../css/flexslider.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/magnific-popup.css">
	<link rel="stylesheet" href="../css/simpleGridTemplate.css">
		<link rel="stylesheet" href="../css/navbar.css">
	<script src="../js/modernizr.custom.12691.js"></script>
	<style type="text/css">
.dropbtn {
	background: transparent;
    color: black;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content #sse{
	width: 100%;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #eee;
}
	</style>
	</head>
	<body>

		<div class="topnav" id="myTopnav">
			<li><a href="../index.php"><input class="weno"  type="submit" value="Inicio"></a></li>
			<div class="dropdown">
			  <button class="dropbtn">Servicios</button>
			  <div class="dropdown-content">
			    <?php 
        			include ('../php/conexion.php');
        			$cones = new conexion;
        			$mostrars = $cones->get_Con();
        			$vers = $mostrars->prepare("CALL mostrarServicios()");
        			$vers->execute();
        			$resultss=$vers->get_result();
        			while($rows=$resultss->fetch_assoc()){
        				echo('
                    <form action="todo.php" method="post">
                      <input type="text" name="id" value="'.$rows['idservicio'].'" style="display: none;">
                      <input type="submit" id="sse" value="'.$rows['servicio'].'">
                    </form>
                    ');
        			}
        		  ?>
			  </div>
			</div>
		</div>
		
				
		<br><br><br><br>
	<h1 class="text-center"><?php
						$id=$_POST["id"];
						$cone = new conexion;
						$mostrar = $cone->get_Con();
						$ver = $mostrar->prepare("CALL mostrarServicios1(?)");
						$ver->bind_param("i", $id);
						$ver->execute();
						$results=$ver->get_result();
						while($row=$results->fetch_assoc()){
							echo('
							'.$row['servicio'].'
							<p>'.$row['asunto'].'</p>
							');
						}
					?></h1>
	<hr>

	<section id="team">
	<div class="container">
	<div >
		<ul class="grid cs-style-3 cs-hover">
		<?php 
						$conex = new conexion;
						$mostra = $conex->get_Con();
						$vers = $mostra->prepare("CALL  mostrar(?)");
						$vers->bind_param("i", $id);
						$vers->execute();
						$result=$vers->get_result();
						while($rows=$result->fetch_assoc()){
							echo('<div class="thumbnail" >
									<img src="data:image/jpg;base64,'.base64_encode($rows['foto']).'" alt="no sirve" style="width: 100%;height: 200px;"/>
									
							<div style="width: 100%;height: 250px;color: black;">
								<p class="tag" style="font-size: 20px;"><strong>'.$rows['nombre'].'</strong></p>
								<h4>$'.$rows['precio'].'</h4>
								
								<p class="text_column">'.$rows['descripcion'].'</p>
							</div>
							</div>

							');
						}
							?>
			 </ul>
		</div>
		</div>
		</section>

	</div>
	<hr>
	<!-- Redes Sociales -->
	  <section id="subscription">
	  <div class="container"> <!-- Container-->
		<div class="col-md-12"> <!-- 12 Column Grid-->
		  <div class="col-md-4 wow bounceIn"> <!-- 4 Column Grid-->
			<img src="../img/logito.png" width="100%" class="img-responsive" alt="phone">
		  </div> <!-- End 4 Column Grid-->

		  <div class="col-md-8"> <!-- 8 Column Grid-->
			<h2>Visita Nuestras Redes Sociales</h2>
			<p id="pie">Es nuestro deber responder a todas sus consultas, sugerencias o comentarios. Hacemos nuestro mejor esfuerzo para brindarle apoyo y ayuda excepcionales.</p>
		<br><br><br>

			<div class="wow fadeIn">
				<a href="https://www.facebook.com/grafik.heredia" target="_blank"><span class="footer-icon fa fa-facebook-square fa-3x"></span></a> 

			  <span class="footer-icon fa fa-twitter-square fa-3x"></span>
			  <span class="footer-icon fa fa-instagram fa-3x"></span>
			</div>

		  </div> <!-- 8 Column Grid-->
		</div><!-- End 12 Column Grid-->
	  </div> <!-- End Container-->
	  <div style="clear: both;"></div>
	  </section>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="../nuevo/js/jquery-1.11.3.min.js"></script> 
	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="../nuevo/js/bootstrap.js"></script>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script type="text/javascript" src="../js/appshowcase_3.js"></script>
		<script type="text/javascript" src="../js/jquery.flexslider-min.js"></script>
		<script type="text/javascript" src="../js/dist/wow.js"></script>
		<script type="text/javascript" src="../js/jquery.magnific-popup.js"></script>
		<script type="text/javascript" src="../js/SmoothScroll.js"></script>
		<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../js/toucheffects.js"></script>

	</body>
</html>
				
					  	