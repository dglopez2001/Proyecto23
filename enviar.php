<?php 
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$asunto = 'Formulario Rellenado';
	$mensaje = "Nombre: ".$nombre."<br> Email: $email<br> Mensaje:".$_POST['mensaje'];

    

	if(mail('tillimit23@gmail.com', $asunto, $mensaje)){
        ini_set("SMTP", "smtp.gmail.com");
        ini_set("smtp_port", "587");
		echo "Correo enviado";
	}
 ?>