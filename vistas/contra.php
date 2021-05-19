<?php
session_start();
if(isset($_SESSION['ingresar'])) {	
?>
<!doctype html>
<html>
	<head>
	<meta charset="utf-8">
	<title>Cambiar Contraseña</title>
	<link rel="icon" type="image/png" href="../img/logito.ico"/>
	<link type="text/css" rel="stylesheet" href="../css/formulario.css">
	</head>
	<body>
		<div class="container">
			<form id="signup" action="../php/upcontra.php" method="post">
				<div class="header">
					<h3>Cambiar Usuario Y Contraseña</h3>
					<p>LLena Los Campos</p>
				</div>
				<div class="sep"></div>
				<div class="inputs">
					<?php
						include("../php/conexion.php");
						$cone = new conexion;
						$eliminarCod = $cone->get_Con();
						$horario = $eliminarCod->prepare("CALL usua()");
						$horario->execute();
						$result=$horario->get_result();
						while($rows=$result->fetch_assoc()){
						echo('
							<input type="text" name="usu" value="'.$rows['usuario'].'" />
							<input type="password" name="con" value="'.$rows['contrase'].'" autofocus required/>
							<input type="password"  name="con1" value="'.$rows['rcontrase'].'" required/>
							');
						}
					?>
					<input id="submit"  type="submit" value="GUARDAR CAMBIOS"> 
				</div>
			</form>
		</div>	
	</body>
</html>
<?php
}else{
	header('Location: index.php');
}
?>	