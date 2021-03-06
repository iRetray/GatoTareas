<?php  

session_start();
include('../funciones.php');
enviarCorreo($_SESSION['correo'], "Recuperación de Clave GatoTareas", "Sus credenciales para ingresar en Gato Tareas son: \n\nUsuario: ".$_SESSION['usuario']."\nClave: ".$_SESSION['clave']."\n\nAhora puede Iniciar sesion en GatoTareas."); 

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../styles.css">
	<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="../../bootstrap/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="../../bootstrap/js/bootstrap.js"></script>
	<meta charset="utf-8">
	<title>Gato Tareas</title>
</head>
<body>

<div class="general">
	<div class="header">
		<div class="titulo">
			<img src="../../img/gatoNegro.png" width="45px" class="float-left">
			<p class="h2 text-white float-left separadoIzquierda">GatoTareas</p>
		</div>
	</div>
	<div class="imagen">
		<img src="../../img/volteado.jpg" class="img-fluid" width="100%">
	</div>
	
	<div class="loginUsuario">
		<table height="100%" width="100%">
		<tr>
			<td>
				<span class="align-middle">
					<center><p class="display-3">Correcto</p></center>
					<center><p class="lead">El correo que proporcionaste esta vinculado a una cuenta en nuestro sistema. Las credenciales fueron enviadas a tu correo: <i>
						<?php  
							echo "".$_SESSION['correo'];
						?>
					</i></p></center>
					<center>
						<p class="lead">
							Aun asi aqui quedan tus credenciales.
						</p>
					</center>
					<center>
						<form>
						  <div class="form-group row">
						    <label for="inputEmail3" class="col-sm-2 col-form-label">Usuario</label>
						    <div class="col-sm-10">
						    	<?php 
						    		echo "<input type='text' class='form-control' id='inputEmail3' placeholder='".$_SESSION["usuario"]."' readonly='true'>";
						    	?>
						    </div>
						  </div>
						  <div class="form-group row">
						    <label for="inputPassword3" class="col-sm-2 col-form-label">Clave</label>
						    <div class="col-sm-10">
						      <?php
						    		echo "<input type='text' class='form-control' id='inputEmail3' placeholder='".$_SESSION["clave"]."' readonly='true'>";
						    	?>
						    </div>
						    
						  </div>
						</form>
					<button type="button" class="btn btn-primary btn-lg" onclick="location.href='../../index.html'">Volver al Inicio</button></center>
				</span>
			</td>
		</tr>
	</table>
		
	</div>
</div>

</body>
</html>