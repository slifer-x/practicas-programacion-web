<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Practica 4</title>
	</head>

	<body>
		<?php
			if($_GET["envio"] == '1') { 
				echo "<div><img src='bien.png' />Gracias por contactarnos. Estaremos dando seguimiento a su solicitud</div>";
			} else if($_GET["envio"] == '0'){
				echo "<div><img src='error.png' />Error al realizar el envio de sus comentarios, vuelva a intentar</div>";
			}

		?>
		<form method="post" action="correo.php">
			<label for="nombre">Indique su nombre: </label>
			<input type="text" id="nombre" name="nombre" /><br />
			
			<label for="correo">Indique su e-mail: </label>
			<input type="email" id="correo" name="correo" placeholder="nombre@host.com" /><br />
			
			<label for="telefono">Indique su telefono: </label>
			<input type="tel" id="telefono" name="telefono" placeholder="De 8 a 10 digitos" maxlength="10" /><br />
			
			<label for="estado">Estado: </label>
			<select name="estado" id="estado">
				<option value="Aguascalientes">Aguascalientes</option>
				<option value="Baja California">Baja California</option>
				<option value="Baja California Sur">Baja California Sur</option>
				<option value="Campeche">Campeche</option>
				<option value="Chiapas">Chiapas</option>
				<option value="Chihuahua">Chihuahua</option>
				<option value="Coahuila">Coahuila</option>
				<option value="Colima">Colima</option>
				<option value="Distrito Federal">Distrito Federal</option>
				<option value="Durango">Durango</option>
				<option value="Estado de Mexico">Estado de México</option>
				<option value="Guanajuato">Guanajuato</option>
				<option value="Guerrero">Guerrero</option>
				<option value="Hidalgo">Hidalgo</option>
				<option value="Jalisco">Jalisco</option>
				<option value="Michoacan">Michoacán</option>
				<option value="Morelos">Morelos</option>
				<option value="Nayarit">Nayarit</option>
				<option value="Nuevo León">Nuevo León</option>
				<option value="Oaxaca">Oaxaca</option>
				<option value="Puebla">Puebla</option>
				<option value="Queretaro">Querétaro</option>
				<option value="Quintana Roo">Quintana Roo</option>
				<option value="San Luis Potosí">San Luis Potosí</option>
				<option value="Sinaloa">Sinaloa</option>
				<option value="Sonora">Sonora</option>
				<option value="Tabasco">Tabasco</option>
				<option value="Tamaulipas">Tamaulipas</option>
				<option value="Tlaxcala">Tlaxcala</option>
				<option value="Veracruz">Veracruz</option>
				<option value="Yucatan">Yucatán</option>
				<option value="Zacatecas">Zacatecas</option>
			</select><br />
			
			<label for="col">Indique su colonia: </label>
			<input type="text" id="col" name="col" /><br /><br />
			
			<fieldset>
				<legend> Motivo del contacto: </legend>
				<input type="checkbox" name="temas" value="Mantenimiento de equipo" /> Mantenimiento de equipo <br />
				<input type="checkbox" name="temas" value="Dudas con el equipo" /> Dudas con el equipo <br />
				<input type="checkbox" name="temas" value="Sugerencias" /> Sugerencias <br />
				<input type="checkbox" name="temas" value="Garantia de equipo" /> Garantia de equipo 
			</fieldset><br /><br />
			
			<label for="comentarios">Agregue sus comentarios</label><br />
			<textarea id="comentarios" name="comentarios" rows="8" cols="40" wrap="hard" placeholder="Escriba aqui"></textarea><br />
			
			<button type="submit">Enviar</button>
			<button type="reset">Limpiar</button> 
		</form>
	</body>
</html>
