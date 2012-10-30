<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Practica 5</title>
	</head>

	<body>
		<?php
			if($_GET["envio"] == '1') { 
				echo "<div><img src='bien.png' />Se ha realizado el registro con exito</div>";
			} else if($_GET["envio"] == '0'){
				echo "<div><img src='error.png' />Error al realizar el registro, vuelva a intentar mas tarde</div>";
			}

		?>
		<form method="post" action="registro.php">	
			<label for="nick"> Ingrese su nick de usuario: </label>
			<input type="text" name="nick" id="nick" /><br />
			
			<label for="correo"> Ingrese su direccion de e-mail</label>
			<input type="email" name="correo" id="correo" /><br />
			
			<label for="passwd"> Ingrese su contraseña </label>
			<input type="password" name="passwd" id="passwd" /><br />
			
			<label for="repasswd"> Confirme su contraseña </label>
			<input type="password" name="repasswd" id="repasswd" /><br />
			
			<button type="submit"> Enviar </button>
			<button type="reset"> Limpiar </button>
		</form>
	</body>
</html>
