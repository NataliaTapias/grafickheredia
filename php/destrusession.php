<?php
session_start();
if(isset($_SESSION['ingresar'])) {	
session_destroy();
header('Location: ../secreta/index.php');
	}else{
	header('Location: ../secreta/index.php');
}
?>