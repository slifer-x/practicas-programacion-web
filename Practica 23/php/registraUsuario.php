<?php

	//Conexion a la base de datos
    include_once ("bd.inc");
	include("class.phpmailer.php");
	include("class.smtp.php");
	$conect = new mysqli($dbhost, $dbuser, $dbpass, $db);
	
	//Comprobar conexion a la base de datos
	if($conect -> connect_error)
		die("Error en la conexion con la base de datos");
	
	//Obtener las variables
	$nick = $_REQUEST["nick"];
	$email = $_REQUEST["correo"];
	$pass = $_REQUEST["md5"];
	
	//Limpiar variables
	$nick = $conect -> real_escape_string($nick);
	$email = $conect -> real_escape_string($email);
	$pass = $conect -> real_escape_string($pass);
	
	//Crear query para insertar datos
	$insert = "INSERT INTO usuarios(nick, correo, pass) VALUES ('$nick','$email','$pass')";
	
	//Ejecutar el query y comprobamos que la insercion no haya tenido errores
	if(!$conect -> query($insert))
		die("Error al realizar el registro del usuario. Contacte al administrador");
	
	//Cerrar base de datos
	$conect -> close();
	
	/*------------------------------------------------------------------------------------------------------*/
	//Enviamos el correo de confirmacion
	$mail = new PHPMAiler();
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "ssl";
	
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465;
	$mail->Username = "manuelolmedo18@gmail.com";
	$mail->Password = ".KwXy70.";
	
	$mail->From = "registro@progweb.com";
	$mail->FromName = "Registro de usuarios";
	$mail->Subject = "Registro realizado con exito";
	
	$body = '<!DOCTYPE html>
				<html lang="es">
				<head>
				  <meta charset="utf-8" />
				  <meta name="viewport" content="width=device-width; initial-scale=1.0" />
				</head>
				
				<body>
				  <div>
				    <div>
				      <h1>&iexcl;Felicidades! Tu registro se ha realizado con exito</h1>
				      <p>
				      Estimado '.$nick.' <br />
				      	El registro de su cuenta de usuario se ha realizado con exito. Ahora podra disfrutar de todas las
				      	ventajas de estar con nosotros. Lo invitamos a que ingrese al sistema y realiza todas las consultas
				      	que le podemos proporcionar.
				      </p>
				      <p>
				      	Sus datos:
				      	<ul><li>Nombre: '.$nick.'</li>
				      	<li>Correo: '.$email.'</li></ul>
		      </p>
		    </div>
		
		    <footer>
		     <p>&copy; Copyright  by Tacnologica NextGeneration</p>
		    </footer>
		  </div>
		</body>
		</html>';
	
	$mail->Body = $body;
	$mail->IsHTML(true);
	$mail->AddAddress($_REQUEST["correo"], $_REQUEST["nick"]);
	
	if(!$mail->Send()) {
		die("Error al enviarle el correo de confirmacion.");
	} else {
		//echo "Mensaje enviado con exito";
		echo ("Se ha enviado un mensaje a su correo electronico para la confirmacion del registro de su cuenta.");
	}	
?>