<?php include 'partials/head.php';?> <!-- Header -->
<?php include 'partials/menu.php';?> <!-- Menú de la parte superior -->
<!-- Validación de que existe un usuario en sesión -->
<?php
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 2) {
        header("location:usuario.php");
    }
} else {
    header("location:login.php");
}
?>
<!--===============================================================================================-->
<!DOCTYPE html>
<head>
  <link rel="icon" href="images/icons/favicon.ico">
  <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<link rel="stylesheet" href="ecss/style2.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
	<div class="container-contact100" style="background-image: url('images/bg-01.jpg');">
		<div class="container">
			<div class="starter-template">
				<br>
				<br>
				<br>
				<div class="jumbotron">
					<div class="container text-center">
						<h1><strong>Bienvenido</strong> <?php echo $_SESSION["usuario"]["nombre"]; ?></h1>
						<p>Panel de control | <span class="label label-info"><?php echo $_SESSION["usuario"]["privilegio"] == 1 ? 'Coordinador' : 'Miembro'; ?></span></p>
						<p>
						<a href="reg_grupo.php" class="btn btn-primary btn-lg">Registro de Grupo</a>
						<a href="proyectos.php" class="btn btn-primary btn-lg">Proyectos en Ejecución</a>
						<a href="cargar_logo.php" class="btn btn-primary btn-lg">Cargar Logo</a>
						<a href="#" class="btn btn-primary btn-lg">Documentación Adjunta</a>
						</p>
					</div>
				</div>
			</div>
		</div><!-- /.container -->
	</div>
</html>
<?php include 'partials/footer.php';?>