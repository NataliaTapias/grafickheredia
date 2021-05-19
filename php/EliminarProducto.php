<?php
session_start();
if(isset($_SESSION['ingresar'])) {	
		include("conexion.php");
		$id=$_POST['id'];
		$cone = new conexion;
		$mostrar = $cone->get_Con();
		$ver = $mostrar->prepare("CALL eliminarProducto(?)");
		$ver->bind_param("i", $id);
		$ver->execute();
       header('Location: ../vistas/Inicio.php');
	}else{
	header('Location: ../vistas/index.php');
}
?>