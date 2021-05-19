<?php
session_start();
if(isset($_SESSION['ingresar'])) {	
	$usu=$_POST['usu'];
	$con=$_POST['con'];
	$rcon=$_POST['con1'];
	if($con==$rcon){
	include("conexion.php");
		$cone = new conexion;
		$mostrar = $cone->get_Con();
		$ver = $mostrar->prepare("CALL upusua(?,?,?)");
		$ver->bind_param("sss", $usu,$con,$rcon);
		$ver->execute();
		header('Location: ../vistas/Inicio.php');
	}else{
		
		echo('<script>
			 var r = confirm("Las Contraseñas no son iguales.\n Volver a intarlo.");
			if(r==true){
			location.href="../vistas/contra.php";
			}else{
			location.href="../vistas/inicio.php";
			}
		</script>');
		
	}
}

?>