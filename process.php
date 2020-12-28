<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
	if (isset($_POST['fname'])){
		/*RECOLECTAMOS DATOS PARA FUNCION MAIL*/
		$nombres=htmlentities($_POST['fname']);
		$email_cliente=htmlentities($_POST['email']);
		$telefono=htmlentities($_POST['phone']);
		$subject=utf8_decode($_POST['subject']);
		$mensaje=htmlentities($_POST['message']);
	/*LO AGRUPAMOS PARA PODER LEERLO EN EL CORREO QUE RECIBIMOS*/
		$message = '';
		$message .= '<p>Hola, ha sido registrado un nuevo mensaje desde el formulario de contacto del sitio web, según el detalle siguiente:</p> ';
		$message .= '<p>Cliente: '.$nombres.'</p> ';
		$message .= '<p>Email: '.$email_cliente.'</p> ';
		$message .= '<p>Teléfono: '.$telefono.'</p> ';
		$message .= '<p>Mensaje: '.$mensaje.'</p> ';

		$from = "clouditnic@gmail.com";
		$headers = "From:" . $from;
		$to = "mromero2100@gmail.com";	
		
		if (mail($to,$subject,$message, $headers)){
			echo 'success';
		}else{
			echo 'No se pudo enviar el mensaje.';
		}
	}/*FINALIZA RECOLECTANDO DATOS PARA FUNCION MAIL*/
?>