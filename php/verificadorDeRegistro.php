<?php
include('../conexion.php');

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$whatsapp = $_POST['whatsapp'];
$nequi = $_POST['nequi'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$claveRepeat = $_POST['claveRepeat'];
$codigo = $_POST['codigo'];

session_start();
$_SESSION['nombre'] = $nombre;

header("Location:registroExitoso.php");

?>