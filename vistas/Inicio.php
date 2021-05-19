<?php
session_start();
if(isset($_SESSION['ingresar'])) {	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Acciones</title>
<link rel="icon" type="image/png" href="../img/logito.ico"/>
	<link href="../css/inici.css" rel="stylesheet" type="text/css">
</head>

<body>
	
	<p align="center"><img src="../img/logito.png" alt="no sirve" width="30%"></p>
			<h2><strong> ¿QUÉ DESEAS HACER HOY?</strong></h2>
		<div class="boton">
			<table>
				<tr>
					<td><a href="NuevoProducto.php"><input type="button" value="CREAR PRODUCTO"></a></td>
					<td><a href="NuevoServicio.php"><input type="button" value="CREAR SERVICIO"></a></td>
				</tr>
				<tr>
					<td><a href="EliminarProducto.php"><input type="button" value="BORRAR PRODUCTO"></a></td>
					<td><a href="EliminarServicio.php"><input type="button" value="BORRAR SERVICIO"></a></td>
				</tr>
				<tr>
					<td><a href="editarprodu.php"><input type="button" value="MODIFICAR PRODUCTO"></a></td>
					<td><a href="EditarServicio.php"><input type="button" value="MODIFICAR SERVICIO"></a></td>
				</tr>
				
				<a  href="../php/destrusession.php"><input id="cerra" type="button" value="CERRAR SESIÓN"></a>
				<a  href="contra.php"><input id="cerra" type="button" value="CAMBIAR CONTRASEÑA"></a>
			</table>
			
		</div>
</body>
</html>
<?php
}else{
	header('Location: index.php');
}
?>