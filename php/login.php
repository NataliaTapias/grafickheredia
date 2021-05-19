<?php 
session_start();
$usuario = $_POST["usuario"];
$contra = $_POST["contra"];
include("conexion.php");
			$con = new conexion;
			$mostra = $con->get_Con();
			$ve = $mostra->prepare("CALL usua()");
			$ve->execute();
			$result=$ve->get_result();
			while($rows=$result->fetch_assoc()){
				$usu=$rows['usuario'];
				$contr=$rows['contrase'];
			}
if($usuario==$usu && $contra==$contr ){
	$_SESSION["ingresar"] = $usuario;
	header('Location: ../vistas/inicio.php');
}else{
	echo('<script>
			 var r = confirm("Usuario Invalido Intentalo Denuevo");
			if(r==true){
			location.href="../secreta/index.php";
			}else{
			location.href="../index.php";
			}
		</script>');
}
?>