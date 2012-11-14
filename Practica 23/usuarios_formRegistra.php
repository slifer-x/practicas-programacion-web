<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>index</title>
		<script type="text/javascript" src="js/validar.js"></script>
		<script type="text/javascript" src="js/lib.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/acomodar.css" />
		
	</head>

	<body>
		<form method="get" action="php/registraUsuario.php" name="registro">
			<div id="main">
				<h1> Datos de usuario </h1>
					<label for="nick"> Nickname: </label>
					<input type="text" name="nick" id="nick" required placeholder="Escribe tu nick" pattern="\w{4,20}" />
					<div class="error" id="error_nick" > Tu nick es incorrecto, vuelve a intentarlo </div>
					
					<label for="correo"> E-mail: </label>
					<input type="email" name="correo" id="correo" required placeholder="Ejemplo: correo@micorreo.com" />
					<div class="error" id="error_mail" > El correo es incorrecto, vuelve a intentarlo </div>
					
					<label for="passwd"> Password: </label>
					<input type="password" name="passwd" id="passwd" pattern="\w{8,}" placeholder="Contraseña debe de tener minimo 8 caracteres" />
					<div class="error" id="error_passwd" > El password es incorrecto, vuelve a intentarlo </div>
					
					<label for="repasswd"> Password confirm: </label>
					<input type="password" name="repasswd" id="repasswd" placeholder="Escribe nuevamente tu contraseña" />
					<div class="error" id="error_repasswd" > Los password's son diferentes, vuelve a intentarlo </div>
					
					<button type="button" onclick="valida()"> Registrar </button>
					
					<input type="hidden" id="md5" name="md5" /> 
					<button type="submit" name="submit" id="submit" > Submit </button>
			</div>
		</form>
	</body>
</html>
