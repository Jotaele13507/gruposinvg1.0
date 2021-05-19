<?php 
error_reporting(E_ALL ^ E_NOTICE);
	session_start();

	// variable declaration
	$cedula_int = "";
	$nombre_int = "";
	$apellido_int = "";
	$estatus_int = "";
	$grado_int = "";
	$inst_int = "";
	$area_int = "";
	$tel_int = "";
	$mail_int = "";
	$id_usuario = "";

	// Sentencia para conectarse a la base de datos
	$db = mysqli_connect('localhost', 'root', '', 'g_inv');
	//echo  "Se conecto";

	// FORMULARIO DE REGISTRO DE USUARIO 
	if (isset($_POST['reg_miembro'])) {
		// RECIBE TODOS LOS VALORES INGRESADOS EN EL FORMULARIO DE REGISTRO
		$cedula_int = mysqli_real_escape_string($db, $_POST['cedula_int']);
		$nombre_int = mysqli_real_escape_string($db, $_POST['nombre_int']);
		$apellido_int = mysqli_real_escape_string($db, $_POST['apellido_int']);
		$estatus_int = mysqli_real_escape_string($db, $_POST['estatus_int']);
		$grado_int = mysqli_real_escape_string($db, $_POST['grado_int']);
		$inst_int = mysqli_real_escape_string($db, $_POST['inst_int']);
		$area_int = mysqli_real_escape_string($db, $_POST['area_int']);
		$tel_int = mysqli_real_escape_string($db, $_POST['tel_int']);
		$mail_int = mysqli_real_escape_string($db, $_POST['mail_int']);
		$id_usuario = $_SESSION["usuario"]['id'];

			$query = "INSERT INTO miembroginv (id_usuario,cedula_int,nombre_int,apellido_int,estatus_int,grado_int,inst_int,area_int,tel_int,mail_int) 
					  VALUES('$id_usuario','$cedula_int','$nombre_int','$apellido_int','$estatus_int','$grado_int','$inst_int','$area_int','$tel_int','$mail_int')";
			mysqli_query($db, $query); // realizamos el query para que se conecte a la base de datos, e ingrese la información 
			//echo " se guardo";
			header('location: adm_mienbros.php');
		}
?>
