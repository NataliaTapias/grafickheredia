<?php
session_start();
if(isset($_SESSION['ingresar'])) {	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Eliminar Servicio</title>
<link rel="icon" type="image/png" href="../img/logito.ico"/>
	<link type="text/css" rel="stylesheet" href="../css/tabla.css">
</head>
<body>
	<a href="Inicio.php" ><input class="ver" type="button" value="Volver"></a>
	<div id="con">
	<table>
				<tr>
					<th>Servicio</th>
					<th>Asunto</th>
					<th>Descripcion</th>
					<th>Foto</th>
					<th>Eliminar</th>
				</tr>
		<?php
			include("../php/conexion.php");
			$con = new conexion;
			$mostra = $con->get_Con();
			$ve = $mostra->prepare("CALL mostrarServicios()");
			$ve->execute();
			$result=$ve->get_result();
			while($rows=$result->fetch_assoc()){
				 echo("
				<tr>
					<td>".$rows['servicio']."</td>
					<td>".$rows['asunto']."</td>
					<td>".$rows['descri']."</td>
					<td><img style='height: 200px;' src='data:image/jpg;base64,".base64_encode($rows['foto'])."'/></td>
					<td>
						<form action='../php/EliminarServicio.php' method='post'>
							<input name='id' style='display: none;' type='text' value='".$rows['idservicio']."'> 
							<input id='eliminar' type='submit' value='Eliminar'>
						</form>
					</td>
				</tr>
			  
		 ");
			}
			?>
		</table> 
	</div>
</body>
</html>
<?php
}else{
	header('Location: index.php');
}
?>