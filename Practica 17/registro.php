<?php
	include('class.phpmailer.php');
	include('class.smtp.php');

	$mail = new PHPMAiler();
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "ssl";
	
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465;
	$mail->Username = "manuelolmedo18@gmail.com";
	$mail->Password = "00000";
	
	$mail->From = "aclaraciones@mxcalidad.com";
	$mail->FromName = "Registro";
	$mail->Subject = "Registro de Usuario";
	
	$body = '<!DOCTYPE html>
				<html lang="es">
				<head>
				  <meta charset="utf-8" />
				  <meta name="viewport" content="width=device-width; initial-scale=1.0" />
				</head>
				
				<body>
				  <div>
				    <header>
				    	<h1>&iexcl;Felicidades! Tu cuenta ya se encuentra registrada</h1>
				    </header>
				
				    <div>
				      <p>
				      	Le confirmamos que su cuenta ya se encuentra actualmente activa y podra acceder a su cuenta con los datos
				      	que nos proporciono y que le enlistamos.
				      </p>
				      <p>
				      	Sus datos:
				      	<ul>';
	$body .= '<li>Usuario: '.$_POST["nick"] .'</li>';
	$body .= '<li>Correo: '.$_POST["correo"] .'</li>';
	$body .= '<li>Contraseña: '.$_POST["passwd"].'</li>';	 
	
	$body .= '</ul>
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
	$mail->AddAddress($_POST["correo"], $_POST["nick"]);
	
	if(!$mail->Send()) {
		//echo "Error ".$mail->ErrorInfo;
		header("location: ./practica5.php?envio=0");
	} else {
		//echo "Mensaje enviado con exito";
		header("location: ./practica5.php?envio=1");
	}	
?>
