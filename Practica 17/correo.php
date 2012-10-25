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
	$mail->Password = ".KwXy70.";
	
	$mail->From = "aclaraciones@mxcalidad.com";
	$mail->FromName = "Aclaraciones";
	$mail->Subject = "Seguimiento a aclaraciones";
	
	$body = '<!DOCTYPE html>
				<html lang="es">
				<head>
				  <meta charset="utf-8" />
				  <meta name="viewport" content="width=device-width; initial-scale=1.0" />
				</head>
				
				<body>
				  <div>
				    <header>
				    	<img src="banner.jpg" align="center" alt="Soporte Tecnico"/>
				    </header>
				
				    <div>
				      <h1>&iexcl;Gracias por contactarnos!</h1>
				      <p>
				      	Estamos mejorando cada d&iacute;a para darle el mejor servicio, en cuanto tengamos la informaci&oacute;n solicitada
				      	referente a su solicitud, se la enviaremos a la brevedad.
				      </p>
				      <p>
				      	Sus datos:
				      	<ul>';
	$body .= '<li>Nombre: '.$_GET["nombre"] .'</li>';
	$body .= '<li>Correo: '.$_GET["correo"] .'</li>';
	$body .= '<li>Telefono: '.$_GET["telefono"].'</li>';	 
    $body .= '<li>Estado: '.$_GET["estado"].'</li>';
	$body .= '<li>Colonia: '.$_GET["col"].'</li>';
    $body .= '<li>Motivo: '.$_GET["temas"].'</li>';
    $body .= '<li>Comentarios: '.$_GET["comentarios"].'</li>';
	
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
	$mail->AddEmbeddedImage("banner.jpg");	
	$mail->AddAddress($_GET["correo"], $_GET["nombre"]);
	
	if(!$mail->Send()) {
		//echo "Error ".$mail->ErrorInfo;
		header("location: ./practica4.php?envio=0");
	} else {
		//echo "Mensaje enviado con exito";
		header("location: ./practica4.php?envio=1");
	}	
?>