<!DOCTYPE html>
<?php include 'partials/head.php'; ?>
<?php include 'partials/menu.php'; ?>
<html lang="en">
<head>
	<title>Mi Grupo</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<link rel="stylesheet" href="ecss/style2.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

<?php 

$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="g_inv";
$db_table_name="invg";

$conexion = mysqli_connect($db_host, $db_user, $db_password,$db_name);
$id_usuario = $_SESSION["usuario"]['id'];
//$secuencia = $_GET['auxiliar'];

      //mysql_set_charset('utf8');  // mostramos la información en utf-8


$sql = "SELECT * FROM gruposinv where id_usuario ='".$id_usuario."'";


// comienza un bucle que leerá todos los registros existentes
$result =mysqli_query($conexion, $sql);
while($row = mysqli_fetch_array($result)) {

// $row es un array con todos los campos existentes en la tabla

?>

<?php 
session_start();
?>
	<!--===============================================================================================-->
	<div class="container-contact100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="" action="">
				<span class="contact100-form-title">
				Mi Grupo
				</span>
				<div class="wrap-input100">
					<span class="label-input100">Unidad Académica</span>
					<input class="input100" type="text" name="unidad_acad" value="<?php echo $row['unidad_acad'] ?>"disabled>
					<?php //echo $_SESSION["usuario"]["id"]; ?>
					<?php //echo $_SESSION["usuario"]["nombre"]; ?>
					<?php //echo $_SESSION["usuario"]["email"]; ?>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 ">
					<span class="label-input100">Nombre del Grupo</span>
					<input class="input100" type="text" name="nombre_grupo" value="<?php echo $row['nombre_grupo'] ?>"disabled>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input">
					<span class="label-input100">Coordinador</span>
					<input class="input100" type="text" name="coordinador"  value="<?php echo $_SESSION["usuario"]["nombre"]; ?>"disabled>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 ">
					<span class="label-input100">Acrónimo</span>
					<input class="input100" type="text" name="acronimo" value="<?php echo $row['acronimo'] ?>"disabled>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input">
					<span class="label-input100">Año de Creación</span>
					<input class="input100" type="text" name="fecha_creacion"  value="<?php echo $row['fecha_creacion'] ?>"disabled>
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Objetivos de Investigación</span>
					<input class="input100" name="obj_grupo" value="<?php echo $row['obj_grupo'] ?>"disabled>
				</div>
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

						<?php
						include "conexion.php";
						$id_usuario = $_SESSION["usuario"]['id'];
						$sentencia = "SELECT * FROM miembroginv where id_usuario = $id_usuario";
						$resultado = mysqli_query($conexion, $sentencia);
						while ($filas = mysqli_fetch_assoc($resultado)) {
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

						?>
					</table>

				</div>

			</form>
		</div>
	</div>
	<!--===============================================================================================-->
	
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
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<?php 
} // fin del bucle de instrucciones

	  // Cerramos la conexión (por seguridad, no dejar conexiones abiertas)
    ?>

</body>
</html>