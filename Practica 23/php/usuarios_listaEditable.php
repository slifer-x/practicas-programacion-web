<?php
	//Cargar el archivo de funciones
	require_once("usuariosFunciones.php");
	
	
	//Ejecutar la funcion que obtiene
	//los datos de los usuarios
	$usuarios = listarUsuarios();
	
	//Obtener los titulos
	$head = array_keys($usuarios[0]);
	echo '<table border="1">';
	echo '<caption>Datos de los usuarios</caption>';
	echo '<thead><tr>';	
	foreach($head as $value)
		echo "<td>$value</td>";
			
	echo '</tr></thead><tbody>';
	$i = 0;
	foreach($usuarios as $key) {
		echo '<tr>';
		$var = array_values($usuarios[$i++]);
		foreach($var as $campo => $value) {
			if($campo == 0) {
				echo '<td><a href="usuarioEliminar.php?id=',$value,'">
					<img src="../img/eliminar.gif" /></a>
					<form action="../usuarios_formEdita.php?id=',$value,'" method="post">
						<input type="hidden" name="id" value="',$value,'" />
						<input type="image" src="../img/editar.png" />					
					</td>';			
			}
			else
				echo "<td>$value</td>";	
		}
			echo '</tr>';				
	}
	echo '</tbody></table>';
	
	
?>
