<?php
	/**
	 * @return array $datos
	 * Esta funcion busca todos los usuarios
	*/
	function listarUsuarios() {
		//Conexion a la base de datos
		include_once("bd.inc");
		$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $db);
	
		if($mysqli -> connect_error)
			die("Error al conectar con la base de datos.");
	
		//Consulta
		$consult = "SELECT * FROM usuarios";
		//Ejecutar consulta
		$result = $mysqli -> query($consult);
		//Cerrar consulta
		$mysqli -> close();
		
		//Se convierte el resultado a una matriz
		if($result -> num_rows >= 1) {
			//Por cada fila obtengo un arreglo
			while($row = $result -> fetch_assoc())
				$lista[] = $row;
		}
				
		return $lista;
	}
	
	function eliminarUsuario($id) {
		//Conexion a la base de datos
		include_once("bd.inc");
		$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $db);
	
		if($mysqli -> connect_error)
			die("Error al conectar con la base de datos.");
	
		//Consulta
		$consult = "delete from usuarios where idusuario=$id";
		//Ejecutar consulta
		$mysqli -> query($consult);
		//Cerrar consulta
		$mysqli -> close();	
	}
	
	function consultaUsuario($id) {
			//Conectarse a la base de datos
			require_once("bd.inc");
			$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $db);
			
			if($mysqli -> connect_error)
				die("Por el momento no se puede acceder al gestor de la base de datos");
				
			//Crear consulta
			$query = "SELECT * FROM usuarios WHERE idusuario=$id";
			
			//Ejecutar consulta
			$result = $mysqli -> query($query);
			
			//Cerrar conexion con la bd
			$mysqli -> close();
			
			if($result -> num_rows == 1)
				$datos = $result -> fetch_assoc();
				
			return $datos;	
	}
?>