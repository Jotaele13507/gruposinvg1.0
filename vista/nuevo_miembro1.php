<?php include('conn/nuevo_prod2.php') ?> <!-- Cargamos el action -->
<!DOCTYPE html>
<?php include 'partials/head.php'; ?> <!-- Header -->
<?php include 'partials/menu.php'; ?> <!-- Menú de la parte superior -->

<!-- Validación de que existe un usuario en sesión -->
<?php
if (isset($_SESSION["usuario"])) {
	if ($_SESSION["usuario"]["privilegio"] == 2) {
		header("location:nuevo_miembro1.php");
	}
} else {
	header("location:login.php");
}?>
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
			<form class="contact100-form validate-form" method="post" action="nuevo_miembro1.php">
				<span class="contact100-form-title">
					REGISTRO DE GRUPO DE NUEVO MIEMBRO
				</span>

				<div class="wrap-input100 ">
					<span class="label-input100">Cédula</span>
					<input class="input100" type="text" name="cedula_int" value="<?php echo $cedula_int; ?>" required>
				</div>

				<div class="wrap-input100 rs1-wrap-input100">
					<span class="label-input100">Nombre</span>
					<input class="input100" type="text" name="nombre_int" value="<?php echo $nombre_int; ?>" required>
				</div>

				<div class="wrap-input100 rs1-wrap-input100">
					<span class="label-input100">Apellido</span>
					<input class="input100" type="text" name="apellido_int" value="<?php echo $apellido_int; ?>" required>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Ejemplo: Categoria Docente">
					<span class="label-input100">Estatus</span>
					<input class="input100" type="text" name="estatus_int" value="<?php echo $estatus_int; ?>">
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Ejemplo: Grado más alto alcanzado">
					<span class="label-input100">Grado</span>
					<input class="input100" type="text" name="grado_int" value="<?php echo $grado_int; ?>">
				</div>

				<div class="wrap-input100 ">
					<span class="label-input100">Institución</span>
					<input class="input100" type="text" name="inst_int" value="<?php echo $inst_int; ?>" required>
				</div>

				<div class="wrap-input100 ">
					<span class="label-input100">Área de interés</span>
					<input class="input100" type="text" name="area_int" value="<?php echo $area_int; ?>" required>
				</div>

				<div class="wrap-input100 rs1-wrap-input100">
					<span class="label-input100">Teléfono</span>
					<input class="input100" type="text" name="tel_int" value="<?php echo $tel_int; ?>">
				</div>

				<div class="wrap-input100 rs1-wrap-input100">
					<span class="label-input100">Correo Electrónico</span>
					<input class="input100" type="text" name="mail_int" value="<?php echo $mail_int; ?>">
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" type="submit" class="btn" name="reg_miembro">
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