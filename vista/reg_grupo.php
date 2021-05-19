<?php include 'conn/index2.php';?> <!-- Cargamos el action -->
<!DOCTYPE html>
<?php include 'partials/head.php'; ?> <!-- Header -->
<?php include 'partials/menu.php'; ?> <!-- Menú de la parte superior -->

<!-- Validación de que existe un usuario en sesión -->
<?php
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 2) {
        header("location:reg_grupo.php");
    }
} else {
    header("location:login.php");
}
?>
<!--===============================================================================================-->

<!-- Validación de que existe un grupo de investigación registrado -->
<?php
	include "conexion.php"; //Conexión a la base de datos
	$id_usuario_grupo	= $_SESSION["usuario"]['id']; // Guardamos el id del usuario en sesión dentro de una variable
 	$consulta_existe 	= "SELECT * FROM gruposinv where id_usuario = '".$id_usuario_grupo."'"; //Realizamos el query a la base de datos
	$resultado_consulta = mysqli_query($conexion, $consulta_existe); // Ejecuta el Query
	$number_of_rows		= mysqli_num_rows($resultado_consulta); // Guardamos el resultado de nuestra consulta en una variable

    	if ($number_of_rows == 1) { // Comparamos el resultado de nuestra consulta.
			//echo "Ya existe un logo para este grupo";
			include "scripts/error_mas_grupo.php";
    	}
		else {		
}
?>
<!--===============================================================================================-->

<html lang="en">
<head>
	<title>REGISTRO DE GRUPO DE INVESTIGACIÓN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<link rel="stylesheet" href="ecss/style2.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<br>

<body>
	<div class="container-contact100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post" action="reg_grupo.php">
				<span class="contact100-form-title">
					REGISTRO DE GRUPO DE INVESTIGACIÓN
				</span>

				<div class="wrap-input100">
					<span class="label-input100">Unidad Académica</span>
					<input class="input100" type="text" name="unidad_acad" value="<?php echo $unidad_acad; ?>" required>
				</div>

				<div class="wrap-input100">
					<span class="label-input100">Nombre del Grupo</span>
					<input class="input100" type="text" name="nombre_grupo" value="<?php echo $nombre_grupo; ?>" required>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 ">
					<span class="label-input100">Acrónimo</span>
					<input class="input100" type="text" name="acronimo" value="<?php echo $acronimo; ?>" required>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input">
					<span class="label-input100">Año de Creación</span>
					<input class="input100" type="text" name="fecha_creacion" value="<?php echo $fecha_creacion; ?>" required>				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Objetivos de Investigación</span>
					<textarea class="input100" name="obj_grupo" value="<?php echo $obj_grupo; ?>" required></textarea>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" type="submit" class="btn" name="reg_grupox">
							REGISTRAR
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