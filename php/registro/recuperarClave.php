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
		<img src="../../img/gatoSorpresa.jpg" class="img-fluid" width="100%">
	</div>
	
	<div class="loginUsuario">
		<table height="100%" width="100%">
		<tr>
			<td>
				<span class="align-middle">
					<center><p class="display-3">Recuperación de Clave</p></center>
					<center><p class="display-4"><em>
					</em></p></center>
					<center><p class="lead">Ingresa el correo con el que te registraste inicialmente en<strong> GatoTareas.</strong></p></center>
					<form action="verificarRecuperacion.php" method="post">
			<div class="form-group">
			    <label for="exampleInputEmail1">Correo registrado en GatoTareas</label>
			    <input type="email" class="form-control" name="correo"  id="correo"placeholder="Escribe tu correo">
			</div>
			 <center><button type="submit" class="btn btn-primary">Recuperar Clave</button></center>
			 <br>
			 
		</form>


				</span>
			</td>
		</tr>
	</table>
		
	</div>
</div>

</body>
</html>