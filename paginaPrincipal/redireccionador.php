<?php
include('../conexion.php');
include('../php/objetoUsuario.php');

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$consulta = "SELECT * FROM `usuarios` WHERE 1";
$resultado = mysqli_query($conexion, $consulta);
$credencialesCorrectas = false;
while ($columna = mysqli_fetch_array( $resultado ))
{
	if ($columna['usuario']==$usuario) {
		if ($columna['clave']==$clave) {
			$credencialesCorrectas = true;
			$usuarioActivo = new usuario($usuario, $clave);
			session_start();
			$_SESSION['usuario'] = $usuario;
			$_SESSION['clave'] = $clave;
			}
		}
}

if(!$credencialesCorrectas){
	header("Location:../php/errores/errorDeCredenciales.php");
}
elseif($usuarioActivo->getTipoUsuario()=="cliente"){
	header("Location:cliente/home.php");
}
elseif ($usuarioActivo->getTipoUsuario()=="colaborador") {
	header("Location:encargado/home.php");
}

?> 
