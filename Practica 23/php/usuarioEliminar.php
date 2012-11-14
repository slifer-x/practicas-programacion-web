<?php

	require_once("usuariosFunciones.php");
	
	//Limpiar las entradas
	$id = $_GET["id"];
	
	//Expresion regular que valide numeros
	//if que valide que sea un numero
	
	//Ejecutar la funcion
	eliminarUsuario($id);
	
	header("Location: ".$_SERVER["HTTP_REFERER"]);

?>