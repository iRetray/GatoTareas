<?php  
include('../php/conexion.php');
include('../php/objetoUsuario.php');
session_start();
$usuarioActivo = new usuario($_SESSION['usuario'], $_SESSION['clave']);
if (!$usuarioActivo->verificarSesion()) {
	header("Location:errorDeSeguridad.php");
}
?>