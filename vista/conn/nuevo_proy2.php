<?php 
error_reporting(E_ALL ^ E_NOTICE);
	session_start();

	// variable declaration
	$tit_inv = "";
	$obj_inv = "";
	$id_usuariot = "";

	// Sentencia para conectarse a la base de datos
	$db = mysqli_connect('localhost', 'root', '', 'g_inv');
	//echo  "Se conecto";

	// FORMULARIO DE REGISTRO DE USUARIO 
	if (isset($_POST['reg_proy'])) {
		// RECIBE TODOS LOS VALORES INGRESADOS EN EL FORMULARIO DE REGISTRO
		$tit_inv = mysqli_real_escape_string($db, $_POST['tit_inv']);
		$obj_inv = mysqli_real_escape_string($db, $_POST['obj_inv']);
		$id_usuariot = $_SESSION["usuario"]['id'];

			$query = "INSERT INTO proyegi (id_usuariot,tit_inv,obj_inv) 
					  VALUES('$id_usuariot','$tit_inv','$obj_inv')";
			mysqli_query($db, $query); // realizamos el query para que se conecte a la base de datos, e ingrese la información 
			//echo " se guardo";
			header('location: proyectos.php');
		}
?>
