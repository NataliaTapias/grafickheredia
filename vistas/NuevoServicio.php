<?php
session_start();
if(isset($_SESSION['ingresar'])) {	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Crear Servicio</title>
<link rel="icon" type="image/png" href="../img/logito.ico"/>
	<link type="text/css" rel="stylesheet" href="../css/formulario.css">
</head>

<body>
	
	<div class="container">

    <form id="signup" action="../php/newservicio.php" method="post" enctype="multipart/form-data">

        <div class="header">
        
            <h3>Crear Servicio</h3>
            
            <p>LLena Los Campos</p>
            
        </div>
        
        <div class="sep"></div>

        <div class="inputs">
        
            <input type="text" maxlength="50" name="nuevo" placeholder="Nombre Del Servicio" autofocus required/>
        
            <input type="text" maxlength="45" name="asunt" placeholder="Asunto Del Servicio" required/>
			
			 <textarea maxlength="140" id="tarea" name="dss"  placeholder="Descripcion Del Servicio" rows="7" cols="30" required></textarea>
            
			<div id="div_file">
			<p id="texto">ELEGIR FOTO</p>
			<input   id="imagen" name="imagen" size="30" type="file" required/> 
		   </div>
			
     		<input id="submit" type="submit" value="CREAR SERVICIO">
            <a href="Inicio.php"><input id="submit" type="button" value="VOLVER"></a>
        
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