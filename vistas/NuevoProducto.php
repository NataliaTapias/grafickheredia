<?php
session_start();
if(isset($_SESSION['ingresar'])) {	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <title>Crear Producto</title>
	<link href="../css/stypproducto.css" type="text/css" rel="stylesheet">
  <link rel="icon" type="image/png" href="../img/logito.ico"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../js/styproducto.js"></script>
</head>
<body>

<!-- multistep form -->
<form id="msform" action="../php/inser.php" method="post" enctype="multipart/form-data">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">nombre</li>
    <li>descripción</li>
    <li>foto</li>
    <li>SECCIÓN</li>
    <li>SUBIR</li>
   
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Ingresar Producto</h2>
    <h3 class="fs-subtitle">Este es el 1° paso</h3>
    <input type="text" maxlength="45" name="nom" placeholder="Ingrese Nombre Producto" required/>
    <input type="text" maxlength="11" name="precio" placeholder="Ingrese Precio Producto" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required />
    <input type="button" name="next" class="next action-button" value="SIGUIENTE" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">descripción del producto</h2>
    <h3 class="fs-subtitle">haz una pequeña descripcion del producto</h3>
    <textarea maxlength="170" id="message" class="input" name="descri" rows="7" cols="30" required></textarea>
    <input type="button" name="previous" class="previous action-button" value="ATRÁS" />
    <input type="button" name="next" class="next action-button" value="SIGUIENTE" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">subir foto</h2>
    <h3 class="fs-subtitle">ingrese la foto del producto</h3>
    <div id="div_file">
			<p id="texto">ELEGIR FOTO</p>
			<input   id="imagen" name="imagen" size="30" type="file" required/> 
		   </div>
    <input type="button" name="previous" class="previous action-button" value="ATRÁS" />
    <input type="button" name="next" class="next action-button" value="SIGUIENTE" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">sección del producto</h2>
    <h3 class="fs-subtitle">elige la sección a la que pertenezca el producto</h3><br>
    <table>
		  <?php
		include("../php/conexion.php");
		$cone = new conexion;
		$mostrar = $cone->get_Con();
		$ver = $mostrar->prepare("CALL mostrarServicios()");
		$ver->execute();
		$results=$ver->get_result();
		while($row=$results->fetch_assoc()){
			echo(' <tr>
    <td class="letra"><label>'.$row["servicio"].'</label></td>
    <td class="cuadro"><input class="check" id="1" type="radio" name="cars" value="'.$row["idservicio"].'"/></td> 
    </tr>');
		}
			?> 
	  </table><br>
 	<input type="button" name="previous" class="previous action-button" value="ATRÁS" />
    <input type="button" name="next" class="next action-button" value="SIGUIENTE" />
  </fieldset> 
  <fieldset>	
    <h2 class="fs-title">terminar proceso</h2>
    <h3 class="fs-subtitle">elige la opción que veas más adecuadas</h3>
	  <td><input class="boton" type="submit" value="CREAR PRODUCTO"></td><br>
	<br>
  	<input type="button" name="previous" class="previous action-button" value="ATRÁS" />
  </fieldset>
 <div id="logito"><img id="logo" src="../img/logito.png" alt="no sirve"></div>
	<a href="Inicio.php"><input class="boton" type="button" value="Volver"></a>
</form>
	
</body>
</html>
<?php
}else{
	header('Location: index.php');
}
?>