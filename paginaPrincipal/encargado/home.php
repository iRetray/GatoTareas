<?php  
session_start();
if ($_SESSSION['usuario']=="") {
	header("Location:../../php/errores/errorDeSeguridad.php");
}

?>