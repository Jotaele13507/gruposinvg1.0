<?php 
error_reporting(E_ALL ^ E_NOTICE);
	session_start();

	// variable declaration
	$username = "";
	$mail    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// Sentencia para conectarse a la base de datos
	$db = mysqli_connect('localhost', 'root', '', 'g_inv');

	// FORMULARIO DE REGISTRO DE USUARIO 
	if (isset($_POST['reg_coordinador'])) {
		// RECIBE TODOS LOS VALORES INGRESADOS EN EL FORMULARIO DE REGISTRO
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$mail = mysqli_real_escape_string($db, $_POST['mail']);
		$password1 = mysqli_real_escape_string($db, $_POST['password1']);
		$password2 = mysqli_real_escape_string($db, $_POST['password2']);
		$nombre = mysqli_real_escape_string($db, $_POST['nombre']);
		$apellido = mysqli_real_escape_string($db, $_POST['apellido']);
		$cedula = mysqli_real_escape_string($db, $_POST['cedula']);
		$tel = mysqli_real_escape_string($db, $_POST['tel']);
		$estatus = mysqli_real_escape_string($db, $_POST['estatus']);
		$grado = mysqli_real_escape_string($db, $_POST['grado']);
		$inst = mysqli_real_escape_string($db, $_POST['inst']);
		$area = mysqli_real_escape_string($db, $_POST['area']);

		// Validación del formulario: nos aseguramos que los campos no esten vacios
		if (empty($username)) { array_push($errors, "Introduzca el usuario"); }
		if (empty($mail)) { array_push($errors, "Introduzca el correo"); }
		if (empty($password1)) { array_push($errors, "Introduzca la contraseña"); }

		// Validación del formulario: nos aseguramos que las dos contraseñas sean iguales
		if ($password1 != $password2) {
			array_push($errors, "Las contraseñas no coinciden, intentelo de nuevo");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password1);//Encripta la contraseña despues de haberla guardado en la bd
			$query = "INSERT INTO users (nombre, apellido, username, mail, password, cedula, tel, estatus, grado, inst, area) 
					  VALUES('$nombre','$apellido','$username', '$mail', '$password', '$cedula', '$tel', '$estatus', '$grado', '$inst', '$area')";
			mysqli_query($db, $query); // realizamos el query para que se conecte a la base de datos, e ingrese la información 

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Ya estas registrado";
			header('location: login.php');
		}

	}

	// ... 

	// FORMULARIO DE INICIO DE SESIÓN
	if (isset($_POST['login_usuario'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']); //SOLICITA VERIFICAR LOS DATOS DE USUARIO EN LA BASE DE DATOS CON LOS INTRODUCIDOS EN EL FORMULARIO
		$password = mysqli_real_escape_string($db, $_POST['password']); //SOLICITA VERIFICAR LOS DATOS DE PASSWORD EN LA BASE DE DATOS CON LOS INTRODUCIDOS EN EL FORMULARIO

		if (empty($username)) {
			array_push($errors, "Introduzca el usuario"); // VERIFICA SI EL CAMPO DE USUARIO ESTA VACIO
		}
		if (empty($password)) {
			array_push($errors, "Introduzca la contraseña"); // VERIFICA SI EL CAMPO DE PASSWORD ESTA VACIO
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "Iniciaste sesión correctamente";
				header('location: index.php');
			}else {
				array_push($errors, "Usuario/password incorrecto");
			}
		}
	}

?>