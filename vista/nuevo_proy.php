<?php include('conn/nuevo_proy2.php') ?> <!-- Cargamos el action -->
<!DOCTYPE html>
<?php include 'partials/head.php'; ?> <!-- Header -->
<?php include 'partials/menu.php'; ?> <!-- Menú de la parte superior -->

<!-- Validación de que existe un usuario en sesión -->
<?php
if (isset($_SESSION["usuario"])) {
	if ($_SESSION["usuario"]["privilegio"] == 2) {
		header("location:nuevo_proy.php");
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
			<form class="contact100-form validate-form" method="post" action="nuevo_proy.php">
				<span class="contact100-form-title">
					REGISTRO DE PROYECTO DE INVESTIGACIÓN
				</span>

				<div class="wrap-input100 ">
					<span class="label-input100">Titulo de la Investigación</span>
					<input class="input100" type="text" name="tit_inv" value="<?php echo $tit_inv; ?>" required>
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Objetivos de la Investigación</span>
					<textarea class="input100" name="obj_inv" required></textarea>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" type="submit" class="btn" name="reg_proy">
							REGISTRAR PROYECTO
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