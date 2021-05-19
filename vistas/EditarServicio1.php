<?php
session_start();
if(isset($_SESSION['ingresar'])) {	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editar Servicio</title>
<link rel="icon" type="image/png" href="../img/logito.ico"/>
	<link type="text/css" rel="stylesheet" href="../css/formulario.css">
</head>

<body>
	
	<div class="container">

    <form id="signup" action="../php/editarservi.php" method="post" enctype="multipart/form-data">

        <div class="header">
        
            <h3>Crear Servicio</h3>
            
            <p>LLena Los Campos</p>
            
        </div>
        
        <div class="sep"></div>

        <div class="inputs">
			
        <?php
		$id=$_POST["id"];
		include("../php/conexion.php");
		$cone = new conexion;
		$eliminarCod = $cone->get_Con();
		$horario = $eliminarCod->prepare("CALL editarservicios(?)");
		$horario->bind_param("i", $id);
		$horario->execute();
		$result=$horario->get_result();
		while($rows=$result->fetch_assoc()){
		echo('
			<input type="text" name="id" value="'.$rows['idservicio'].'" style="display: none;"/>
			<input type="text" maxlength="50" name="nuevo" value="'.$rows['servicio'].'" autofocus required/>
        
            <input type="text" maxlength="45" name="asunt" value="'.$rows['asunto'].'" required/>
			
			 <textarea id="tarea" maxlength="140" name="dss" rows="7" cols="30" required>'.$rows['descri'].'</textarea>
		
			');
		}
	?>
			<div id="div_file">
			<p id="texto">ELEGIR NUEVA FOTO</p>
			<input   id="imagen" name="imagen" size="30" type="file" required/> 
		   </div>
			
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