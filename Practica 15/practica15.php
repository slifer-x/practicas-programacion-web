<!DOCTYPE html>
<html>
	<head>
	<title>Tablas de multiplicar con php</title>
	</head>
	<body>
		<h1>Tablas de multiplicar con php</h1>
		<h4>Escribe los datos solicitados para generar las tablas</h4>

		<form action="generadortablas.php" method="POST">

			<label for="cantidad">Cantidad de tablas</label>
			<input type="text" name="cant" id="cant" placeholder="Ingresa algun numero" required="required" />

			<label for="hasta">Numero limite</label>
			<input type="text" name="lim" id="lim" placeholder="Ingresa algun numero" required="required" />
		
			<button type="submit" name="boton" id="boton" >Enviar...</button>

		</form>
	</body>
</html>

