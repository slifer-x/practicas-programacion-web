<?php
	/*
	 * Manejo de sesiones
	*/
	session_start();
	
	//Conexion de la base de datos
	require_once ("bd.inc");
	$conexion = new mysqli($dbhost, $dbuser, $dbpass, $db);
	
	//Validar que se hara hecho la conexion
	if($conexion -> connect_error)
		die("Error, no se puedo realizar la conexion a la base de datos");
	
	//Obtener las variables
	$iduser = $_REQUEST["id_us"];
	
	//Limpiar las variables con real_escape
	$iduser = $conexion -> real_escape_string($iduser);
	
	//Limpiar las variables con html entities
	$iduser = htmlentities($iduser, ENT_QUOTES, "UTF-8");
	
	//Verificar con expr. regulares
	$expReg = '[0-9]*';
	if(!ereg($expReg, $iduser))
		die("El id del usuario es invalido, compruebe que solamente sean numeros");
	
	//Crear la consulta
	$consult = "SELECT idusuario,nick,correo FROM usuarios WHERE idusuario = $iduser";
	
	//Ejecutar la consulta
	$result = $conexion -> query($consult);
	
	//Cerrar la conexion
	$conexion -> close();
	
	//Validar que el resultado sea correcto
	if($result -> num_rows != 1)
		die("El usuario no existe");
	
	//Convertir el resultado en un arreglo
	//$datos = $result -> fetch_array(MYSQLI_ASSOC);
	$datos = $result -> fetch_assoc(); //Es lo mismo que la declaracion anterior
	
	/*Pongo esto porque la maestra dijo
	 * es para manejo de sesiones
	 * para poder mandar el resultado del query al 
	 * archivo del formulario
	 */
	$_SESSION["registro"] = $datos;
	
	header("location: ../usuario.php");
	//Procesar los resultados de la consulta
	
?>