<?php
session_start();
if(isset($_SESSION['ingresar'])) {	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editar Producto</title>
<link rel="icon" type="image/png" href="../img/logito.ico"/>
	<link type="text/css" rel="stylesheet" href="../css/tabla.css">
	<link type="text/css" rel="stylesheet" href="../css/navbar.css">
	<link type="text/css" rel="stylesheet" href="../css/select.css">
</head>
<body>
	<div class="topnav" id="myTopnav">
		<a href="Inicio.php" style="float: left;"><input class="ver" type="button" value="Volver"></a>
		
	<form action="editarprodu.php" method="post">
		<a ><input class="ver" name="en" type="submit" value="Ver"></a>
		<a >
		<div class="select">
			<select name="num">
				<?php
				include("../php/conexion.php");
				$con = new conexion;
				$mostra = $con->get_Con();
				$ve = $mostra->prepare("CALL mostrarServicios()");
				$ve->execute();
				$result=$ve->get_result();
				while($rows=$result->fetch_assoc()){
					echo('<option value="'.$rows['idservicio'].'">'.$rows['servicio'].'</option>');
				}
				?>
			</select>
			 <div class="select_arrow"></div>
		</div>
			</a>
		
	</form>
			
		
		
	</div>
	
	<br><br><br><br>
		<div id="con">
	<table>
				<tr>
					<th>Nombre</th>
					<th>Precio</th>
					<th>Descripcion</th>
					<th>Foto</th>
					<th>Editar</th>
				</tr>
		<?php 
		if(isset($_POST["en"])) {
		$numm=$_POST["num"];
		$cone = new conexion;
		$mostrar = $cone->get_Con();
		$ver = $mostrar->prepare("CALL mostrar(?)");
		$ver->bind_param("i", $numm);
		$ver->execute();
		$results=$ver->get_result();
		while($row=$results->fetch_assoc()){
			
		 echo("
				<tr>
					<td>".$row['nombre']."</td>
					<td>".$row['precio']."</td>
					<td>".$row['descripcion']."</td>
					<td><img style='height: 200px;' src='data:image/jpg;base64,".base64_encode($row['foto'])."'/></td>
					<td>
						<form action='editarprodu1.php' method='post'>
							<input name='id' style='display: none;' type='text' value='".$row['idtodo']."'> 
							<input class='edi'  type='submit' value='Editar'>
						</form>
					</td>
				</tr>
			  
		 ");
			
		 };
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