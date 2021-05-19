<!DOCTYPE html>
<?php include 'partials/head.php'; ?> <!-- Header -->
<?php include 'partials/menu.php'; ?> <!-- Menú de la parte superior -->

<!-- Validación de que existe un usuario en sesión -->
<?php
if (isset($_SESSION["usuario"])) {
	if ($_SESSION["usuario"]["privilegio"] == 2) {
		header("location:mi_grupo.php");
	}
} else {
	header("location:login.php");
} ?>
<!--===============================================================================================-->

<!-- Validación de que existe un grupo de investigación registrado -->
<?php
include "conexion.php"; //Conexión a la base de datos
$id_usuario_grupo	= $_SESSION["usuario"]['id']; // Guardamos el id del usuario en sesión dentro de una variable
$consulta_existe 	= "SELECT * FROM gruposinv where id_usuario = '" . $id_usuario_grupo . "'"; //Realizamos el query a la base de datos
$resultado_consulta = mysqli_query($conexion, $consulta_existe); // Ejecuta el Query
$number_of_rows		= mysqli_num_rows($resultado_consulta); // Guardamos el resultado de nuestra consulta en una variable

if ($number_of_rows == 0) { // Comparamos el resultado de nuestra consulta. 
	include "scripts/error_no_grupo.php";
} else {
}
?>
<!--===============================================================================================-->

<!-- Consulta de Logo del grupo de investigación -->
<?php
include "conexion.php"; //Conexión a la base de datos
$id_usuariol 	= $_SESSION["usuario"]['id']; // Guardamos el id del usuario en sesión dentro de una variable
$querylogo 		= "SELECT dir_logo FROM logogi where id_usuariol ='" . $id_usuariol . "'"; //Realizamos el query a la base de datos
// comienza un bucle que leerá todos los registros existentes
$logo 			= mysqli_query($conexion, $querylogo); // Ejecuta el Query
while ($fil = mysqli_fetch_assoc($logo)) { // $fil es un array con todos los campos existentes en la tabla
	$imagen = '<img class="img mb-4" src="' . $fil["dir_logo"] .  '" alt="image"  width="400" heigth="400" >'; // Guardamos la dirección del logo dentro de una variable
} ?>
<!--===============================================================================================-->

<!-- Consulta de información del grupo de investigación -->
<?php
include "conexion.php"; //Conexión a la base de datos
$id_usuario 	= $_SESSION["usuario"]['id']; // Guardamos el id del usuario en sesión dentro de una variable
$sql			= "SELECT * FROM gruposinv where id_usuario ='" . $id_usuario . "'"; //Realizamos el query a la base de datos
// comienza un bucle que leerá todos los registros existentes
$result = mysqli_query($conexion, $sql); // Ejecuta el Query
while ($row = mysqli_fetch_array($result)) // $row es un array con todos los campos existentes en la tabla
{ ?>
<!--===============================================================================================-->

	<html lang="en">

	<head>
		<!--===============================================================================================-->
		<link rel="icon" href="images/icons/favicon.ico">
		<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
		<link rel="stylesheet" href="ecss/style2.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<!--===============================================================================================-->
	</head>

	<body>
		<div class="container-contact100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-contact100">
				<form class="contact100-form validate-form" method="" action="">
					<span class="contact100-form-title">
						MI GRUPO
					</span>
					<div class="hero-wrap js-fullheight" data-stellar-background-ratio="0.5">
						<div class="js-fullheight d-flex justify-content-center align-items-center">
							<div class="col-md-3 text text-center">
								<?php echo $imagen ?> <!-- Desplegamos el logo -->
							</div>
						</div>
					</div>
					<div class="wrap-input100">
						<br>
						<span class="label-input100">Unidad Académica</span>
						<input class="input100" type="text" name="unidad_acad" value="<?php echo $row['unidad_acad'] ?>" disabled>
					</div>

					<div class="wrap-input100 rs1-wrap-input100 ">
						<span class="label-input100">Nombre del Grupo</span>
						<input class="input100" type="text" name="nombre_grupo" value="<?php echo $row['nombre_grupo'] ?>" disabled>
					</div>

					<div class="wrap-input100 rs1-wrap-input100 validate-input">
						<span class="label-input100">Coordinador</span>
						<input class="input100" type="text" name="coordinador" value="<?php echo $_SESSION["usuario"]["nombre"]; ?>" disabled>
					</div>

					<div class="wrap-input100 rs1-wrap-input100 ">
						<span class="label-input100">Acrónimo</span>
						<input class="input100" type="text" name="acronimo" value="<?php echo $row['acronimo'] ?>" disabled>
					</div>

					<div class="wrap-input100 rs1-wrap-input100 validate-input">
						<span class="label-input100">Año de Creación</span>
						<input class="input100" type="text" name="fecha_creacion" value="<?php echo $row['fecha_creacion'] ?>" disabled>
					</div>

					<div class="wrap-input100 validate-input">
						<span class="label-input100">Objetivos de Investigación</span>
						<input class="input100" name="obj_grupo" value="<?php echo $row['obj_grupo'] ?>" disabled>
					</div>
					<!--===============================================================================================-->	
					<span class="contact100-form-title">
						MIEMBROS DEL GRUPO
					</span>
					<div class="wrap-input100">
						<table style=" width: 1000px; border-collapse: separate ; border-spacing: 25px 10px;">
							<thead>
								<th>Cédula</th>
								<th>Nombre</th>
								<th>Apellido</th>
								<th>Estatus</th>
								<th>Grado</th>
								<th>Institución</th>
								<th>Área de interés</th>
								<th>Teléfono</th>
								<th>Mail</th>
							</thead>
							<!-- Consulta de información de los miembros del grupo de investigación -->
							<?php
							include "conexion.php"; //Conexión a la base de datos
							$id_usuario = $_SESSION["usuario"]['id']; // Guardamos el id del usuario en sesión dentro de una variable
							$sentencia = "SELECT * FROM miembroginv where id_usuario = $id_usuario"; //Realizamos el query a la base de datos
							// comienza un bucle que leerá todos los registros existentes
							$resultado = mysqli_query($conexion, $sentencia); // Ejecuta el Query
							while ($filas = mysqli_fetch_assoc($resultado)) { // $filas es un array con todos los campos existentes en la tabla
								echo "<tr>";
								echo "<td>";
								echo $filas['cedula_int'];
								echo "</td>";
								echo "<td>";
								echo $filas['nombre_int'];
								echo "</td>";
								echo "<td>";
								echo $filas['apellido_int'];
								echo "</td>";
								echo "<td>";
								echo $filas['estatus_int'];
								echo "</td>";
								echo "<td>";
								echo $filas['grado_int'];
								echo "</td>";
								echo "<td>";
								echo $filas['inst_int'];
								echo "</td>";
								echo "<td>";
								echo $filas['area_int'];
								echo "</td>";
								echo "<td>";
								echo $filas['tel_int'];
								echo "</td>";
								echo "<td>";
								echo $filas['mail_int'];
								echo "</td>";
							}
							$resultado = null;
							?>
							<!--===============================================================================================-->
						</table>
					</div>

					<span class="contact100-form-title">
						PROYECTOS DE INVESTIGACIÓN EN EJECUCIÓN
					</span>
					<div class="wrap-input100">
						<table style=" width: 1000px; border-collapse: separate ; border-spacing: 30px 10px;">
							<thead>
								<th>TITULO DEL PROYECTO</th>
								<th></th>
								<th></th>
								<th>OBJETIVO DEL PROYECTO</th>
							</thead>
							<!-- Consulta de información de los miembros del grupo de investigación -->
							<?php
							include "conexion.php"; //Conexión a la base de datos
							$id_usuariot = $_SESSION["usuario"]['id']; // Guardamos el id del usuario en sesión dentro de una variable
							$sentencia = "SELECT * FROM proyegi where id_usuariot = $id_usuariot"; //Realizamos el query a la base de datos
							// comienza un bucle que leerá todos los registros existentes
							$resultado = mysqli_query($conexion, $sentencia); // Ejecuta el Query
							while ($filas = mysqli_fetch_assoc($resultado)) { // $filas es un array con todos los campos existentes en la tabla
								echo "<td>";
								echo $filas['tit_inv'];
								echo "</td>";
								echo "<th> </th>";
								echo "<th> </th>";
								echo "<td>";
								echo $filas['obj_inv'];
								echo "</td>";
								echo "</tr>";
							}
							$resultado = null;
							?>
						</table>
					</div>
				</form>
			</div>
		</div>
		</form>
		</div>
		</div>
		<!--===============================================================================================-->
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

	<?php
} // fin del bucle de instrucciones

// Cerramos la conexión (por seguridad, no dejar conexiones abiertas)
	?>
	</body>

	</html>