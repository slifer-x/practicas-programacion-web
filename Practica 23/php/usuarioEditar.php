<?php
	session_start();
	//Cargar el archivo
	require_once("usuariosFunciones.php");
	
	//Limpiar las entradas
	$id = $_REQUEST["id"];
	
	//Si el id no es valido, no hago la busqueda
	
	//Ejecutar la funcion que obtiene los datos de los usuarios
	$_SESSION["datos"] = consultaUsuario($id);
	
	header("Location: ../usuario_edita.php");
	
?>