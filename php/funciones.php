<?php  

function enviarCorreo($destinatario, $asunto, $contenido){
	mail($destinatario, $asunto, $contenido);
}

?>