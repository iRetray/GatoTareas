<?php  
$nombre = $_SESSION['nombre']; 
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../styles.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="../bootstrap/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
	<meta charset="utf-8">
	<title>Gato Tareas</title>
</head>
<body>

<div class="general">
	<div class="header">
		<div class="titulo">
			<img src="../img/gatoNegro.png" width="45px" class="float-left">
			<p class="h2 text-white float-left separadoIzquierda">GatoTareas</p>
		</div>
	</div>
	<div class="imagen">
		<img src="../img/gatoFeliz.jpg" class="img-fluid" width="100%">
	</div>
	
	<div class="loginUsuario">
		<table height="100%" width="100%">
		<tr>
			<td>
				<span class="align-middle">
					<center><p class="display-3">¡Felicidades!</p></center>
					<center><p class="display-4"><em>
						<?php 
							echo $nombre;
						?>
					</em></p></center>
					<p class="lead">El registro de usuario ha terminado correctamente, ahora puede acceder a <strong>GatoTareas</strong> mediante sus credenciales para poder disfrutar de todos los servicios que tenemos para usted.</p>
					<center>
					<button type="button" class="btn btn-primary btn-lg">Volver al Inicio</button></center>
				</span>
			</td>
		</tr>
	</table>
		
	</div>
</div>

</body>
</html>


