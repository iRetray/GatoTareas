<?php  
include('conexion.php');

class Usuario
{
	private $nombre;
	private $usuario;
	private $clave;
	private $tipoUsuario;
	private $correo;
	private $telefono;
	private $nequi;

	public function __construct($usuario, $clave)
	{
		$this->usuario = $usuario;
		$consulta = "SELECT * FROM `usuarios` WHERE 1";
		$resultado = mysqli_query($conexion, $consulta);
		while ($columna = mysqli_fetch_array( $resultado ))
		{
			if ($columna['usuario']==$usuario && $columna['clave']==$clave) {
				$this->nombre = $columna['nombre'];
				$this->clave = $columna['clave'];
				$this->tipoUsuario = $columna['tipoUsuario'];
				$this->correo = $columna['correo'];
				$this->telefono = $columna['telefono'];
				$this->nequi = $columna['nequi'];
			}		
		}
	}

	public function iniciarSesion(){
		session_start();
		$_SESSION['usuario'] = $this->usuario;
		$_SESSION['clave'] = $this->clave;
	}

	public function verificarSesion(){
		session_start();
		if($_SESSION['usuario']=$this->usuario && $_SESSION['clave']=$this->clave){
			return true;
		}
		else {
			return false;
		}
	}

	public function getUsuario(){
		return $this->usuario;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function getClave(){
		return $this->clave;
	}

	public function getTipoUsuario(){
		return $this->tipoUsuario;
	}

	public function getCorreo(){
		return $this->correo;
	}

	public function getTelefono(){
		return $this->telefono;
	}

	public function getNequi(){
		return $this->nequi;
	}
}

?>