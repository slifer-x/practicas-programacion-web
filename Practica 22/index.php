<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<form method="POST" action="buscar.php">
			<input type="text" name="search" /><button type="submit">Buscar</button>
		</form>
		<?php
			session_start();
			if(!isset($_GET["search"]))
				require_once('tabla.php');
			$usuario = $_SESSION["registro"];
			unset($_SESSION["registro"]);
			
			$head = array_keys($usuario[0]);
			
			echo "<table border='1'>";
			echo '<thead><tr>';	
			foreach($head as $value)
				echo "<td>$value</td>";
				
			echo '</tr></thead><tbody>';
			$i = 0;
			foreach($usuario as $key) {
				echo '<tr>';
				$var = array_values($usuario[$i++]);
				foreach($var as $value) {
					echo "<td>$value</td>";	
				}
				echo '</tr>';				
			}
			echo '</tbody></table>';
		?>
	</body>
</html>