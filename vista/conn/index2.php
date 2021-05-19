<?php 
	error_reporting(E_ALL ^ E_NOTICE);
	session_start();

	// variable declaration
	$unidad_acad = "";
	$nombre_grupo = "";
	$acronimo = "";
	$fecha_creacion = "";
	$obj_grupo = "";
	$id_usuario = "";

	// Sentencia para conectarse a la base de datos
	$db = mysqli_connect('localhost', 'root', '', 'g_inv');
	//echo  "Se conecto";

	// FORMULARIO DE REGISTRO DE USUARIO 
	if (isset($_POST['reg_grupox'])) {
		// RECIBE TODOS LOS VALORES INGRESADOS EN EL FORMULARIO DE REGISTRO
		$unidad_acad = mysqli_real_escape_string($db, $_POST['unidad_acad']);
		$nombre_grupo = mysqli_real_escape_string($db, $_POST['nombre_grupo']);
		$acronimo = mysqli_real_escape_string($db, $_POST['acronimo']);
		$fecha_creacion = mysqli_real_escape_string($db, $_POST['fecha_creacion']);
		$obj_grupo = mysqli_real_escape_string($db, $_POST['obj_grupo']);
		$id_usuario = $_SESSION["usuario"]['id'];

			$query = "INSERT INTO gruposinv (id_usuario,unidad_acad,nombre_grupo,acronimo,fecha_creacion,obj_grupo) 
					  VALUES('$id_usuario','$unidad_acad','$nombre_grupo','$acronimo','$fecha_creacion','$obj_grupo')";
			
			mysqli_query($db, $query); // realizamos el query para que se conecte a la base de datos, e ingrese la información 
			//echo " se guardo";
			header('location: adm_mienbros.php');
		}
?>