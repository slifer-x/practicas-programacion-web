<?php
	require_once ('bd.inc');
	$conect = new mysqli($dbhost, $dbuser, $dbpass, $db);
	if($conect -> connect_error) 
		die('Error al realizar la conexion en la base de datos');
	
	//Variables
	$iduser = $_REQUEST["id_us"];
	$passwd = $_REQUEST["passwd"];
	$interes = $_REQUEST["inter"];
	$nombre = $_REQUEST["nombre"];
	$direccion = $_REQUEST["direccion"];
	$tel = $_REQUEST["telefono"];
	$fecha = $_REQUEST["bd"];
	$sexo = $_REQUEST["sexo"];
	//$image = $_REQUEST["img"];
	
	//Limpiar todas las variables con real_escape_string
	$iduser = $conect -> real_escape_string($iduser);
	$passwd = $conect -> real_escape_string($passwd);
	$interes = $conect -> real_escape_string($interes);
	$nombre = $conect -> real_escape_string($nombre);
	$direccion = $conect -> real_escape_string($direccion);
	$tel = $conect -> real_escape_string($tel);
	$fecha = $conect -> real_escape_string($fecha);
	$sexo = $conect -> real_escape_string($sexo);
	$image = $conect -> real_escape_string($image);
	
	//Limpiar todas las variables con html entities
	$iduser = htmlentities($iduser, ENT_QUOTES, "UTF-8");
	$passwd = htmlentities($passwd, ENT_QUOTES, "UTF-8");
	$interes = htmlentities($interes, ENT_QUOTES, "UTF-8");
	$nombre = htmlentities($nombre, ENT_QUOTES, "UTF-8");
	$direccion = htmlentities($direccion, ENT_QUOTES, "UTF-8");
	$tel = htmlentities($tel, ENT_QUOTES, "UTF-8");
	$fecha = htmlentities($fecha, ENT_QUOTES, "UTF-8");
	$sexo = htmlentities($sexo, ENT_QUOTES, "UTF-8");
	$image = htmlentities($image, ENT_QUOTES, "UTF-8");
	
	//Ponemos la fecha de acuerdo al formato que debe de llevar para poder ingresarla a la base de datos
	$tempdate = explode("/", $fecha);
	$fecha = $tempdate[2] . '-' . $tempdate[1] . '-' . $tempdate [0];
	unset($tempdate);
	
	//Validar con expresiones regulares
	if(!ereg('[A-Za-z]{3}[A-Za-z ]{0,}',$nombre))
		die("El nombre de usuario es invalido");
	if(!ereg('[A-Za-z0-9 _\#\.\-]{10,50}', $direccion))
		die("La direccion es invalida");
	if(!ereg('[0-9]{8,10}', $tel))
		die("El telefono es incorrecto");
		
	//Crear una consulta para extraer la contraseña en md5 y realizar la comprobacion que coincida
	$query = "SELECT pass,nick FROM usuarios WHERE idusuario=$iduser";
	
	//Aplicar consulta
	$result = $conect -> query($query);
	if($result -> num_rows != 1)
		die("Hubo un error al consultar al usuario");
		
	$array = $result -> fetch_assoc();
	
	//Comprobamos que el password sea el mismo que el que ingreso el usuario ya con md5 aplicado
	if($array["pass"] != $passwd)
		die("La contrase&ntilde;a no es valida. Vuelva a realizar la actualizaci&oacute;n de los datos.");
		
	//-------------------------Start script of file--------------------------------------------------
	//Se define el tamaño que se permitirá (en KB por eso lo multiplicamos por 1024)
	$tamanioPermitido = 200 * 1024;

	//Tenemos una lista con las extensiones que aceptaremos
	$extensionesPermitidas = array("jpg", "jpeg", "gif", "png");

	//Obtenemos la extensión del archivo
	$extension = end(explode(".", $_FILES["file"]["name"]));

	//Validamos el tipo de archivo, el tamaño en bytes y que la extensión sea válida
	if ((($_FILES["file"]["type"] == "image/gif")
      || ($_FILES["file"]["type"] == "image/jpeg")
      || ($_FILES["file"]["type"] == "image/png")
      || ($_FILES["file"]["type"] == "image/jpg"))
      && ($_FILES["file"]["size"] < $tamanioPermitido)
      && in_array($extension, $extensionesPermitidas)){
            //Si no hubo un error al subir el archivo temporalmente
            if ($_FILES["file"]["error"] > 0){
            	echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
            }
            else  {
               //Si el archivo ya existe se muestra el mensaje de error
               if (file_exists("upload/" . $_FILES["file"]["name"])){
                     echo $_FILES["file"]["name"] . " already exists. ";
               }
               else{
                     //Se mueve el archivo de su ruta temporal a una ruta establecida
                     move_uploaded_file($_FILES["file"]["tmp_name"],
                             "upload/" . $_FILES["file"]["name"]);
                     $archivo = "upload/" . $_FILES["file"]["name"];
               }
            }
	}
	else{
   	die("Archivo inválido");
	}
	//------------------------End script of file-----------------------------------------------------	
	//Realizamos la actualizacion de los datos en el servidor despues de que comprobamos que la contraseña es correcta
	$query = "UPDATE usuarios SET nombre='$nombre', direccion='$direccion', sexo='$sexo', telefono='$tel', fecha='$fecha', img_path='$archivo' WHERE idusuario=$iduser";
	
	//Aplicar consulta
	if(!$conect -> query($query))
		die("Error. No fue posible realizar la actualizacion de sus datos");
		
	//Cerrar base de datso
	$conect -> close();
	
	header("Location: ../index.html");
?>