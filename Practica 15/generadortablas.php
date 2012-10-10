<?php
	$cant = $_POST["cant"];
	$lim = $_POST["lim"];

	for($i=1; $i<=$cant; $i++) {

		echo '<table border="1">
			<caption> Tabla del ',$i,'</caption>';
		for($j = 1; $j <= $lim; $j++) {
			echo '<tr>
				<td>',$i,' x ',$j,'</td>
				<td>',$i*$j,'</td>
				</tr>';
		}
		echo '</table>';
	}

?>
