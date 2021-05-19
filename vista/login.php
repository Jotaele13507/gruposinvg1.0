<?php include 'partials/head.php';?>
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
				<div class="row">
					<div class="col-md-4 col-md-offset-4">
						<div class="panel panel-default">
							<div class="panel-body">
								<form id="loginForm" action="validarCode.php" method="POST" role="form">
									<legend>Iniciar sesión</legend>

									<div class="form-group">
										<label for="usuario">Usuario</label>
										<input type="text" name="txtUsuario" class="form-control" id="usuario" autofocus required placeholder="usuario">
									</div>

									<div class="form-group">
										<label for="password">Password</label>
										<input type="password" name="txtPassword" class="form-control" required id="password" placeholder="****">
									</div>

									<button type="submit" class="btn btn-success">Ingresar</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- /.container -->
	</div>
</html>
<?php include 'partials/footer.php';?>