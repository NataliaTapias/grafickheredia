<?php
session_start();
if(isset($_SESSION['ingresar'])) {	
	$id=$_POST['id'];
	$nom=$_POST['nom'];
	$pre=$_POST['precio'];
	$des=$_POST['descri'];
	$ser=$_POST['cars'];
		$nombre_img = $_FILES['imagen']['name'];
		$tipo = $_FILES['imagen']['type'];
		$tamano = $_FILES['imagen']['size'];
	include("conexion.php");

	if (($nombre_img == !NULL) && ($_FILES['imagen']['size'] <= 1000000)) 
{
   //indicamos los formatos que permitimos subir a nuestro servidor
   if (($_FILES["imagen"]["type"] == "image/gif")
   || ($_FILES["imagen"]["type"] == "image/jpeg")
   || ($_FILES["imagen"]["type"] == "image/jpg")
   || ($_FILES["imagen"]["type"] == "image/png"))
   {
      // Ruta donde se guardarán las imágenes que subamos
      $directorio ='../img/inser/';
      // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
      move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nom.'.jpg');
	 
	  $bina=file_get_contents($directorio.$nom.'.jpg');
	   
    } 
    else 
    {
       //si no cumple con el formato
       echo "No se puede subir una imagen con ese formato ";
    }
} 
else 
{
   //si existe la variable pero se pasa del tamaño permitido
   if($nombre_img == !NULL) echo "La imagen es demasiado grande "; 
}


	$cone = new conexion;
	$eliminarCod = $cone->get_Con();
	$horario = $eliminarCod->prepare("CALL editarProducto(?,?,?,?,?,?)");
	$horario->bind_param("isissi", $id,$nom,$pre,$des,$bina,$ser);
	$horario->execute();
	header('Location: ../vistas/Inicio.php');
}else{
	header('Location: ../vistas/index.php');
}
?>