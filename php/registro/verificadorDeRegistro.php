<?php
include('../../conexion.php');
include('../objetoUsuario.php');

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

$_SESSION['nombre'] = $nombre;

if ($usuarioActivo->verificarRegistroUsuario()=="usuarioRepetido") {
	header("Location:../errores/usuarioRepetido.php");
} elseif ($usuarioActivo->verificarRegistroCorreo()=="correoRepetido") {
	header("Location:../errores/correoRepetido.php");
} elseif ($usuarioActivo->verificarRegistroUsuario()=="correcto" && $usuarioActivo->verificarRegistroCorreo()=="correcto" && $clave==$claveRepeat) {
	if ($codigo=="2d7ba3fa7eb") {
		$consulta = "INSERT INTO usuarios (usuario, nombre, clave, tipoUsuario, correo, telefono, nequi) VALUES ('$usuario','$nombre','$clave','colaborador','$correo','$whatsapp','$nequi')";
		if (mysqli_query($conexion, $consulta)) {
			echo "Consulta insertada correctamente";
		} else {
			echo "".mysqli_error($conexion);
		}
		header("Location:registroExitosoColaborador.php");
	} else {
		$consulta = "INSERT INTO usuarios (usuario, nombre, clave, tipoUsuario, correo, telefono, nequi) VALUES ('$usuario','$nombre','$clave','cliente','$correo','$whatsapp','$nequi')";
		if (mysqli_query($conexion, $consulta)) {
			echo "Consulta insertada correctamente";
		} else {
			echo "".mysqli_error($conexion);
		}
		header("Location:registroExitosoNormal.php");
	}
	
} else {
	header("Location:../errores/claveNoCoincide.php");
}

?>