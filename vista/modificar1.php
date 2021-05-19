<?php 

error_reporting(E_ALL ^ E_NOTICE);
$user ='root';
$password='';
$db='g_inv';
$localhost='localhost';

$conexion = mysqli_connect($localhost, $user, $password, $db);


if ($conexion -> connect_errno){
die( "Fallo la conexión : (" . $conexion -> mysqli_connect_errno() 
. ") " . $conexion -> mysqli_connect_error());
}

$aux = $_GET['no'];

  ConsultarProducto($aux,$conexion);

  function ConsultarProducto($aux,$conexion)
  {
    $sentencia="SELECT * FROM productos WHERE no=".$aux;
    $resultado=mysqli_query($conexion,$sentencia) or die (mysqli_error($conexion));
    $filas=mysqli_fetch_assoc($resultado);
    return [
      $filas['id_producto'],
      $filas['nombre'],
      $filas['descripcion']
    ];

  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Modificación</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="container-contact100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					MODIFICACIÓN DE MIENBRO DEL GRUPO DE INVESTIGACIÓN
				</span>

				<div class="wrap-input100">
					<span class="label-input100">Unidad Académica</span>
					<input class="input100" type="text" name="web" required>
				</div>

				<div class="wrap-input100">
					<span class="label-input100">Nombre del Grupo</span>
					<input class="input100" type="text" name="name" required>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 ">
					<span class="label-input100">Acrónimo</span>
					<input class="input100" type="text" name="email" required>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Ejemplo: 2018">
					<span class="label-input100">Año de Creación</span>
					<input class="input100" type="text" name="email">
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Ejemplo: ">
					<span class="label-input100">Objetivos de Investigación</span>
					<textarea class="input100" name="message"></textarea>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							ENVIAR
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
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
