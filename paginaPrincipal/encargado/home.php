<?php  
include('../../conexion.php');
include('../../php/objetoUsuario.php');
session_start();
if ($_SESSION['usuario']=="") {
	header("Location:../../php/errores/errorDeSeguridad.php");
}
$usuarioActivo = new usuario($_SESSION['usuario'], $_SESSION['clave']);
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

<div class="generalC">

	<div class="header">
		<div class="titulo">
			<img src="../../img/gatoNegro.png" width="45px" class="float-left">
			<p class="h2 text-white float-left separadoIzquierda">GatoTareas</p>
			<p class="display-5 text-white float-left separadoIzquierda">/ 
				<?php  
					echo $usuarioActivo->getNombre();
				?>
			</p>
		</div>
		<div class="loginModal">
			<img src="../../img/userBlanco.png" width="45px">
			<button type="button" onclick="location.href='../../php/logout.php'" class="btn btn btn-light">
			 Cerrar Sesión
			</button>
		</div>
	</div>

	<div class="perfil">
		<div class="cajaSombra">
			<img src="../../img/perfi.jpg" class="perfilRedondo">
			<center>
				<p class="display-4">
					<?php  
						echo $usuarioActivo->getUsuario();
					?>
				</p>
				<p class="display-5 text-muted">
					<?php  
						echo "".$usuarioActivo->getNombre()."<br><i>".$usuarioActivo->getCorreo()."</i><br><strong>".$usuarioActivo->getTelefono()."</strong><br>";
					?>
				</p>
				<button class="btn btn-dark">Modificar Perfil</button>
			</center>
		</div>	
	</div>

	<div class="pedido">
		<center><p class="display-5">Pagina del Encargado</p></center>
		<div class="cajaSombra">
			<?php  
				echo "Insertar pedidos desde la BD";
			?>
		</div>
	</div>

	<div class="misPedidos">
		<div class="cajaSombra">
			<center><p class="display-5">Nuevo pedido</p></center>
				<form id="nuevaTarea" action="verificarPedido.php" method="post">
				  <div class="form-group">
				    <label for="titulo">Titulo de la Tarea</label>
				    <input type="text" class="form-control" id="titulo" aria-describedby="emailHelp" placeholder="Ensayo sobre movimiento cinetico" name="titulo">
				  </div>
				  <div class="form-group">
				    <label for="tipoTrabajo">Tipo de Trabajo</label>
				    <select class="form-control" id="tipoTrabajo">
				      <option value="ensayo">Ensayo</option>
				      <option value="examen">Examen</option>
				      <option value="escrito">Trabajo escrito</option>
				    </select>
				    <small class="form-text text-muted">Elige la clasificación que mejor se ajuste a tu solicitud.</small>
				  </div>
				  <div class="form-group">
				    <label for="fecha">Fecha de entrega</label>
				    <input type="date" class="form-control" id="fecha" aria-describedby="emailHelp">
				    <small class="form-text text-muted">Fecha en la que necesitas terminado tu trabajo.</small>
				  </div>
				  <div class="form-group">
				    <label for="descripcion">Descripción del trabajo</label>
				    <textarea name="descripcion" rows="5" cols="40" form="nuevaTarea"></textarea>
				    <small class="form-text text-muted">Describe detalladamente todos los requerimientos que debe cumplir tu trabajo (extensión, normas APA/ICONTEC, estilo de las referencias).</small>
				  </div>
				  <div class="form-group">
				    <label for="descripcion">Archivos base</label>
				    <input type="file" name="archivo">
				    <small class="form-text text-muted">Adjunta todos los archivos que se puedan necesitar en la realización del trabajo (comprímelos si son varios).</small>
				  </div>
				  <center><button type="submit" class="btn btn-primary">Enviar Solicitud</button></center>
				</form>
		</div>
	</div>

	<div class="footer">
		<div class="redes">
		<img src="../../img/whatsapp.png" class="img-thumbnail float-left" width="140px">
		<div class="float-left">
			<div class="separadoIzquierda">
			<h1 class="display-4 text-white">Contactanos</h1>
			<p class="lead text-white">Comunícate directamente con GatoTareas<a href="https://api.whatsapp.com/send?phone=573507948999&text=Hola! Quiero recibir más información sobre GatoTareas :D" class="lead"><br>enviando un mensaje de Whatsapp.</a></p>
			</div>
			</div>
		</div>
	</div>
	
</div>

<!-------------------------- Modales ------------------------------------>

<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header modalGris">
      	<p class="h2 fuenteHeader text-white">Iniciar Sesión</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body fondoGris">
      	<div class="loginCliente">
        <form method="post" action="paginaPrincipal/redireccionador.php">
  <div class="form-group row">
    <label for="usuario" class="col-sm-2 col-form-label text-white">Usuario</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Tu nombre de Usuario">
    </div>
  </div>
  <div class="form-group row">
    <label for="clave" class="col-sm-2 col-form-label text-white">Clave</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="clave" name="clave" placeholder="Tu Contraseña">
    </div>
    
  </div>
  <div class="centrado">
    	<small id="emailHelp" class="form-text text-white text-muted">¿Olvidaste tu contraseña? Puedes intentar <a href="php/registro/recuperarClave.php" title="Recuperar contraseña">recuperarla mediante tu correo.</a></small>
    </div>

  <div class="centrado">
      <button type="submit" class="btn btn-primary">Ingresar al Sistema</button>
   </div>
  </div>
</form>
		</div>
      </div>
    </div>
  </div>
</div>

</body>
</html>