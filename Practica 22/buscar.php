<?php
	session_start();
	
	include_once("bd.inc");
	$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $db);
	
	if($mysqli -> connect_error)
		die("Error al conectar con la base de datos.");
	
	//Consulta
	$var = $_REQUEST["search"];
	$consult = "SELECT * FROM usuarios WHERE nick LIKE '%$var%' OR nombre LIKE '%$var%'";
	
	$result = $mysqli -> query($consult);
	
	$mysqli -> close();
	
	if($result -> num_rows >= 1)
		while($row = $result -> fetch_assoc())
			$lista[] = $row;
			
	$_SESSION["registro"] = $lista;
	
	header("Location: index.php?search=$var");	
?>