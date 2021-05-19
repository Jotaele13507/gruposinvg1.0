<!DOCTYPE html>
<?php include 'partials/head.php'; ?>
<?php include 'partials/menu.php'; ?>
<?php
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 2) {
        header("location:reg_grupo.php");
    }
} else {
    header("location:login.php");
}
?>

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

<body>
	<div class="container-contact100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post" action="conn/accion.php">
				<span class="contact100-form-title">
					REGISTRO DE GRUPO DE INVESTIGACIÓN
				</span>

				<div class="wrap-input100">
					<span class="label-input100">Unidad Académica</span>
                    <input class="input100" type="text" name="unidad_acad" required>
				</div>

                <div class="wrap-input100 rs1-wrap-input100 ">
					<span class="label-input100">Nombre del Grupo</span>
					<input class="input100" type="text" name="nombre_grupo" required>
				</div>

                <div class="wrap-input100 rs1-wrap-input100 ">
					<span class="label-input100">Nombre del Coordinador</span>
					<input class="input100" type="text" name="nombre_coor" required>
				</div>

                <div class="wrap-input100 rs1-wrap-input100 ">
					<span class="label-input100">Acrónimo</span>
					<input class="input100" type="text" name="acronimo" required>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input">
					<span class="label-input100">Año de Creación</span>
					<input class="input100" type="text" name="fecha_creacion" required>				
                </div>

                <div class="wrap-input100 validate-input">
					<span class="label-input100">Objetivos de Investigación</span>
					<textarea class="input100" name="obj_grupo" required></textarea>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" type="submit" class="btn">
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