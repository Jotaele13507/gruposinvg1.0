<!DOCTYPE html>
<?php include 'partials/head.php'; ?> <!-- Header -->
<?php include 'partials/menu.php'; ?> <!-- Menú de la parte superior -->

<!-- Validación de que existe un usuario en sesión -->
<?php
if (isset($_SESSION["usuario"])) {
	if ($_SESSION["usuario"]["privilegio"] == 2) {
		header("location:adm_mienbros.php");
	}
} else {
	header("location:login.php");
} ?>
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
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					ADMINISTRACIÓN DE MIENBROS DEL GRUPO DE INVESTIGACIÓN
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
							<th> <a href="nuevo_miembro1.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
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
							//echo "<td>  <a href='modif_prod1.php?no=".$filas['no']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
							echo "<td> <a href='eliminar_prod.php?id_miembro=" . $filas['id_miembro'] . "''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
							echo "</tr>";
						} ?>
						<!--===============================================================================================-->
					</table>
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