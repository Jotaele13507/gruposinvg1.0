<!DOCTYPE html>
<?php include 'partials/head.php'; ?> <!-- Header -->
<?php include 'partials/menu.php'; ?> <!-- Menú de la parte superior -->

<!-- Validación de que existe un usuario en sesión -->
<?php
if (isset($_SESSION["usuario"])) {
	if ($_SESSION["usuario"]["privilegio"] == 1) {
		//header("location:cargar_logo.php");
	}
} else {
	header("location:login.php");
}
?>
<!--===============================================================================================-->

<!-- Validación de que existe un un logo para el grupo de investigación -->
<?php
include "conexion.php"; //Conexión a la base de datos
$id_usuario_logo 	= $_SESSION["usuario"]['id']; // Guardamos el id del usuario en sesión dentro de una variable
$consulta_existe 	= "SELECT * FROM logogi where id_usuariol = '" . $id_usuario_logo . "'"; //Realizamos el query a la base de datos
$resultado_consulta = mysqli_query($conexion, $consulta_existe); // Ejecuta el Query
$number_of_rows		= mysqli_num_rows($resultado_consulta); // Guardamos el resultado de nuestra consulta en una variable

if ($number_of_rows == 1) { // Comparamos el resultado de nuestra consulta.
	include "scripts/error_mas_logo.php";
} else {
}
?>
<!--===============================================================================================-->
<html lang="en">

<head>
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<link rel="stylesheet" href="ecss/style2.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body>
	<div class="container-contact100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-contact100">
			<form action="subida_logo.php" method="POST" enctype="multipart/form-data">
				<span class="contact100-form-title">
					SUBIR LOGO
				</span>
				<input type="file" name="file">
				<br>
				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" type="submit" class="btn" name="sdb_logo" value="Subir archivo">
							SUBIR
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>

	<div id="dropDownSelect1"></div>
	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>

</body>

</html>