<?php
include('../conexion.php');
include('../php/objetoUsuario.php');

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$whatsapp = $_POST['whatsapp'];
$nequi = $_POST['nequi'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$claveRepeat = $_POST['claveRepeat'];
$codigo = $_POST['codigo'];

$usuarioActivo = new usuario($usuario, $clave);
$usuarioActivo->iniciarSesion();

if ($usuarioActivo->verificarRegistro()=="usuarioRepetido") {
	header("Location:usuarioRepetido.php");
} elseif ($usuarioActivo->verificarRegistro()=="correoRepetido") {
	header("Location:correoRepetido.php");
} elseif ($usuarioActivo->verificarRegistro()=="correcto" && $clave==$claveRepeat) {
	if ($codigo="2d7ba3fa7eb") {
		header("Location:../php/registro/registroExitosoNormal.php");
	} else {
		header("Location:../php/registro/registroExitosoColaborador.php");
	}
	
} else {
	header("Location:claveNoCoincide.php");
}

?>