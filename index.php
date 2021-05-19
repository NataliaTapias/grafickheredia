<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GrafickHeredia</title>
    <link rel="icon" type="image/png" href="img/logito.ico"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet" >
    <link href="css/animate.css" rel="stylesheet" >
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/simpleGridTemplate.css" rel="stylesheet" type="text/css">
	  <link href="css/Modal.css"  rel="stylesheet">
	  <link href="css/submodal.css"  rel="stylesheet">
	  <link href="css/acodeon.css"  rel="stylesheet">
	  <link href="css/efectos.css"  rel="stylesheet">
    <script src="js/modernizr.custom.12691.js"></script>
    <style type="text/css" >
      .btn {
        background: #00ccff;
        background-image: -webkit-linear-gradient(top, #00ccff, #00ff99);
        background-image: -moz-linear-gradient(top, #00ccff, #00ff99);
        background-image: -ms-linear-gradient(top, #00ccff, #00ff99);
        background-image: -o-linear-gradient(top, #00ccff, #00ff99);
        background-image: linear-gradient(to bottom, #00ccff, #00ff99);
        -webkit-border-radius: 28;
        -moz-border-radius: 28;
        border-radius: 28px;
        font-family: Arial;
        color: #000000;
        font-size: 13px;
        padding: 10px 20px 10px 20px;
        text-decoration: none;
      }

      .btn:hover {
        background: #33ff00;
        background-image: -webkit-linear-gradient(top, #33ff00, #138a17);
        background-image: -moz-linear-gradient(top, #33ff00, #138a17);
        background-image: -ms-linear-gradient(top, #33ff00, #138a17);
        background-image: -o-linear-gradient(top, #33ff00, #138a17);
        background-image: linear-gradient(to bottom, #33ff00, #138a17);
        text-decoration: none;
      	
      }
      	 
      .dropdown  {
          background: transparent;
          position: relative;
          display: inline-block;
      }
      .dropdown:hover{
        background: #eee;
      }
      
      .dropdown-content  {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
      }
      .dropdown-content a  {
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
      }
      .dropdown-content a:hover {background-color: #f1f1f1}
      .dropdown:hover .dropdown-content {
          display: block;
      }
      .dropdown-content #sse  {
        width: 100%;
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
      }

		</style>
  </head>
  <body>
  
<!-- Navigation -->
  <section id="navigation" class="navbar-fixed-top not-visible-nav">
    <div class="menu-position">
      <div class="nav-logo"> 
        <a href="index.html" class="logo">
          <img src="img/logito.png" alt="logo">
        </a>
      </div>
      <a class="mini-nav-button"><i class="nav-fa fa fa-bars"></i></a>
      <div class="nav-menu"> 
        <ul class="nav">
          <li class="active"><a href="#home" class="scroll">HOME</a></li>
  			  <div class="dropdown">
  		      <li class="#"><a href="#hora" class="dropbtn">EMPRESA</a></li>
        	  <div class="dropdown-content">
          		<a href="#hora">MISION</a>
          		<a href="#hora">VISION</a>
          		<a href="#hora">POLITICA</a>
        	  </div>
  				</div>
  			  <div class="dropdown">
  		      <li class="#"><a href="#team">SERVICIOS</a></li>
  	        <div class="dropdown-content">
        		  <?php 
        			include ('php/conexion.php');
        			$cones = new conexion;
        			$mostrars = $cones->get_Con();
        			$vers = $mostrars->prepare("CALL mostrarServicios()");
        			$vers->execute();
        			$resultss=$vers->get_result();
        			while($rows=$resultss->fetch_assoc()){
        				echo('
                    <form action="vistas/todo.php" method="post">
                      <input type="text" name="id" value="'.$rows['idservicio'].'" style="display: none;">
                      <input type="submit" id="sse" value="'.$rows['servicio'].'">
                    </form>
                    ');
        			}
        		  ?>
  	        </div>
  				</div>
  			    <li class="#"><a href="#nove">NOVEDADES</a></li>
            <li class="#"><a href="#contact">CONTACTO</a></li>
        </ul>
      </div>
		</div>
  </section>
	
  <!-- Inicio -->
  <section id="home" class="banner" >
    <div id="bannerSlider" class="carousel carousel-fade slide" data-ride="carousel">
      <ol class="carousel-indicators waypoint">
        <li data-target="#bannerSlider" data-slide-to="0" class="active"></li>
        <li data-target="#bannerSlider" data-slide-to="1" class=""></li>
        <li data-target="#bannerSlider" data-slide-to="2" class=""></li>
        <li data-target="#bannerSlider" data-slide-to="3" class=""></li>
		  <li data-target="#bannerSlider" data-slide-to="4" class=""></li>
		  <li data-target="#bannerSlider" data-slide-to="5" class=""></li>
      </ol>
      <!-- Carousel -->
        <div class="carousel-inner">
          <div class="item active slider1">
            <div class="carousel-caption">
              <div class="container">
                <div class="col-md-12">
                  <div class="content">
                   
                    <br>
                     <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
                    <br>
                    
                  </div>
                </div>
              </div>
            </div>
			</div>       
        </div>     
    </div>
  </section>
	  
  <!-- Misiom-->
  <section id="hora">
    <div class="container">
          <div clas	s="col-md-12">
          <div class="contact wow bounce add-bottom">
    		  <br><br>
            <ul class="acorh" id="mi">
      <li><a href="#">MISION</a>
        <ul>
      <li><a>Micro empresa de diseño y publicidad
      enfocada al desarrollo de proyectos,
      abordando distintas áreas del diseño
      gráfico como el diseño de
      identidad corporativa, editorial y demás,
      donde se plantean las óptimas formas
      de salida y sus componentes para la
      satisfacción de cada tarea designada.</a></li>
          </ul>
        </li>
        <li id="vi"><a href="#">VISION</a>
          <ul>
            <li><a>Ser una MICRO EMPRESA consolidada,
      de excelencia, en la creación y entrega
      de servicios integrales en el ámbito de
      la publicidad.</a></li>
          </ul>
        </li>
        <li id="po"><a href="#">POLITICA</a>
          <ul>
            <li><a>Paralelamente a las actividades que
      se presentan, el interés propio por la
      importancia que ha asumido el mercado
      en la participación a través de Internet,
      han llevado a potenciar la motivación por
      darnos a conocer a través de este medio
      para generar proyectos completos de nivel
      profesional.
      Fundamental es el valor que toman las
      relaciones humanas entre los miembros
      que integran el equipo de trabajo,
      compartir experiencias y aportar en
      conjunto en favor de la Micro empresa dan
      como resultado un ambiente en donde
      se obtienen visiones criticas en distintos
      ámbitos de producción.</a></li>
          </ul>
        </li>
      </ul>
              <div class="divider add-bottom"></div>
      		  </div>
          </div>


            </div>
        </section>	  
      	  
  <!-- Servicios -->
  <section id="team">
    <div class="container">
    <div class="col-md-12">
			  <div class="team wow bounce add-bottom">
				<h2><img class="if-image" src="img/logito.png" width="250px" ></h2><br>
				  <h3 style="text-align: center; color: black;font-weight: 600;font-size: 34px; height: 100px;"><strong style="height: 100%;">TODO EN EL MISMO LUGAR</strong></h3>
				<div class="divider add-bottom"></div>
			  </div>
		  
        <ul class="grid cs-style-3 cs-hover">
			
		<?php 
			$cone = new conexion;
			$mostrar = $cone->get_Con();
			$ver = $mostrar->prepare("CALL mostrarServicios()");
			$ver->execute();
			$results=$ver->get_result();
			while($row=$results->fetch_assoc()){
				echo('<div class="thumbnail wow slideInLeft">
						<a href="#openModal">
							<form  action="index.php#openModal" method="post">
								<input  type="image" name="num" value="'.$row['idservicio'].'" src="data:image/jpg;base64,'.base64_encode($row['foto']).'" alt="" style="width: 100%;height: 200px"/>
							</form>
						</a>
						<div style="width: 100%;height: 300px;color: black;">
							<h4>'.$row['servicio'].'</h4>
							<p class="tag">'.$row['asunto'].'</p>
							<p class="text_column">'.$row['descri'].'.</p>
						</div>
						<form action="vistas/todo.php" method="post">
							<input type="text" name="id" value="'.$row['idservicio'].'" style="display: none;">
							<input class="btn" type="submit" value="Ver Más">
						</form>
					</div>');
			}
		?>
        </ul>
	</section>
	

  <!-- Contactanos -->
  <section id="contact">
    <div class="container">
          <div class="col-md-12">
          <div class="contact wow bounce add-bottom">
            <h2>ENTRA EN CONTACTO CON NOSOTROS<span>SI NECESITAS UNA COTIZACIÓN O SU EMPRESA
    REQUIERE NUSTROS SERVICIOS NO DUDES EN ENVIARNOS
    TU MENSAJE, CON GUSTO LE ATENDEREMOS.</span></h2>
            <div class="divider add-bottom"></div>
          </div>

        <div class="wow fadeIn">
          <div class="col-md-4" style="padding-top:20px; text-align:center;">
            <a class="popup-gmaps" href="https://www.google.com/maps/embed/v1/place?key=AIzaSyAZ4hQpPfcRanOsvB6h90qQDjeiVKsQ4rM
        &q=/Cl.+40+%2341-126,+Barranquilla,+Atlántico"><span class="map-icon fa fa-map-marker fa-3x"></span></a>
            <div class="contact-info">Calle 40 No. 41 - 126 - Barranquilla</div>
            <div class="contact-info">Tel: 379 3678 </div>
            <div class="contact-info">Cels: 3123521920 - 3002752683</div>
            <div class="contact-info">Email: grafikheredia@gmail.com</div>
    		  <div class="contact-info"><strong style="font-size: 20px;">HORARIO DE ATENCIÓN</strong>
    		  <br>LUNES A VIERNES
    			<br>8:30 A.M. - 12:30 P.M. / 2:00 P.M. - 5:00 P.M.
    			<br>SÁBADO
    			 <br>8:30 A.M. - 12:30 P.M.
    		  </div>
            <a target="_blank" href="https://www.google.com.co/maps/place/Cl.+40+%2341-126,+Barranquilla,+Atl%C3%A1ntico/@10.9815426,-74.7840781,17z/data=!3m1!4b1!4m5!3m4!1s0x8ef42d619536561b:0xc4903573a272a75c!8m2!3d10.9815373!4d-74.7818894">Ver la localización en Google maps</a>
          </div>
        </div>


          <form action="php/contact.php"> <!-- Form -->
            <div class="wow fadeIn">
              <div class="col-md-4"> <!-- Left Form -->
                <input type="email" placeholder="Correo" name="email" required="required" class="c-text" >
                <input type="text" placeholder="Nombre" name="name" required="required" class="c-text" >
                <input type="text" placeholder="Tema" name="subject" required="required" class="c-text" >
              </div> <!-- End Left Form -->
            </div>

            <div class="wow fadeIn">
              <div class="col-md-4"> <!-- Right Form -->
                <textarea name="message"  class="m-text" required="required" placeholder="Tu Mensaje" rows="3"></textarea>
                <input type="submit" name="subscribe" class="send-text contact-btn">
              </div><!-- End Right Form -->
            </div>

          </form> <!-- End Form -->

          </div>
        </div>
        <div style="clear: both;"></div>
      </section>
	  
  <!-- Horarios-->
  <section id="hora1">
    <div class="container">
      <div clas	s="col-md-12">
      <div class="contact wow bounce add-bottom">
		  <br><br>
        <h2 style="color: black;">HORARIO DE ATENCIÓN<span style="color: black;">LUNES A VIERNES</span></h2>
		  <p align="center" style="color: black;">8:30 A.M. - 12:30 P.M. / 2:00 P.M. - 5:00 P.M.</p>
		  <h2 ><span style="color: black;">LUNES A VIERNES</span></h2>
		  <p align="center" style="color: black;">8:30 A.M. - 12:30 P.M.</p>
        <div class="divider add-bottom"></div>
		  </div>
    </div>


      </div>
  </section>
	
  <!-- Redes Sociales -->
  <section id="subscription">
    <div class="container"> <!-- Container-->
      <div class="col-md-12"> <!-- 12 Column Grid-->
        <div class="col-md-4 wow bounceIn"> <!-- 4 Column Grid-->
          <img src="img/logito.png" class="img-responsive" alt="phone">
        </div> <!-- End 4 Column Grid-->

        <div class="col-md-8"> <!-- 8 Column Grid-->
          <h2>Visita Nuestras Redes Sociales</h2>
          <p id="pie">Es nuestro deber responder a todas sus consultas, sugerencias o comentarios. Hacemos nuestro mejor esfuerzo para brindarle apoyo y ayuda excepcionales.</p>
  	       <br><br><br>
          
          <div class="wow fadeIn">
  			<a href="https://www.facebook.com/grafik.heredia" target="_blank"><span class="footer-icon fa fa-facebook-square fa-3x"></span></a> 
            
            <a href="https://twitter.com/GrafikHeredia" target="_blank"><span class="footer-icon fa fa-twitter-square fa-3x"></span></a>
            <a href="https://www.instagram.com/grafik_heredia/" target="_blank"><span class="footer-icon fa fa-instagram fa-3x"></span></a>
          </div>

        </div> <!-- 8 Column Grid-->
      </div><!-- End 12 Column Grid-->
    </div> <!-- End Container-->
    <div style="clear: both;"></div>
  </section>

	
<div id="openModal" class="modalDialog">
	<div>
		<a href="#close" title="Close" class="close">X</a>
		<div class="w3-content w3-display-container">
		<?php 
		$numm=$_POST["num"];
		$cone = new conexion;
		$mostrar = $cone->get_Con();
		$ver = $mostrar->prepare("CALL mostrar(?)");
		$ver->bind_param("i", $numm);
		$ver->execute();
		$results=$ver->get_result();
		while($row=$results->fetch_assoc()){
			
		 echo("<div class='mySlides'>
		 <img style='width: 100%;height: 200px;' src='data:image/jpg;base64,".base64_encode($row['foto'])."'/>
		 <h2>".$row['nombre']."</h2>
		 <p>".$row['precio']."</p>
		 <p>".$row['descripcion']."</p>
		 </div>
		 ");
			
		 };
		
		?>
		 <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  		<button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
		</div>
</div>	
	</div>
	  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/appshowcase_3.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="js/dist/wow.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/toucheffects.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
	  <script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
  </body>
</html>