<?php  

class Funciones
{
	public function enviarCorreo($destinatario, $asunto, $contenido){
		mail($destinatario, $asunto, $contenido);
	}
}

?>