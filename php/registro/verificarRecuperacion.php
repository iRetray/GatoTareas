<?php  
include('../../conexion.php');
include('../objetoUsuario.php');

$correo = $_POST['correo'];


$consulta = "SELECT * FROM `usuarios` WHERE 1";
$resultado = mysqli_query($conexion, $consulta);
$correoEncontrado = false;
while ($columna = mysqli_fetch_array( $resultado ))
{
	if ($columna['correo']==$correo) {
		$correoEncontrado = true;
		session_start();
		$_SESSION['usuario'] = $columna['usuario'];
		$_SESSION['clave'] = $columna['clave'];
		$_SESSION['correo'] = $correo;
	}		
}

if ($correoEncontrado) {
	header("Location:darCredenciales.php");
} else {
	header("Location:noEncontradaCredencial.php");
}

?>