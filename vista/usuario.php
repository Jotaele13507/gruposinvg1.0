<?php include 'partials/head.php';?>
<?php
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 1) {
        header("location:admin.php");
    }
} else {
    header("location:login.php");
}
?>
<?php include 'partials/menu.php';?>
<!DOCTYPE html>
<head>
  <title>Vicerrectoría de Investigación & Postgrado</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
					</div>
				</div>
			</div>
		</div><!-- /.container -->
	</div>
</html>
<?php include 'partials/footer.php';?>