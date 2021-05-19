<?php
$user = 'root';
$password = '';
$db = 'g_inv';
$localhost = 'localhost';

$conexion = mysqli_connect($localhost, $user, $password, $db);

error_reporting(E_ALL ^ E_NOTICE);

$aux_no = $_POST['no'];
$aux_cedula = $_POST['cedula_int'];
$aux_nombre = $_POST['nombre_int'];
$aux_apellido = $_POST['apellido_int'];
$aux_estatus = $_POST['estatus_int'];
$aux_grado = $_POST['grado_int'];
$aux_inst = $_POST['inst_int'];
$aux_area = $_POST['area_int'];
$aux_tel = $_POST['tel_int'];
$aux_mail = $_POST['mail_int'];
print_r ($_POST);

function ModificarProducto(
	$aux_no,
	$aux_cedula,
	$aux_nombre,
	$aux_apellido,
	$aux_estatus,
	$aux_grado,
	$aux_inst,
	$aux_area,
	$aux_tel,
	$aux_mail,
	$conexion
) {
	echo $aux_cedula;
	$sentencia = "UPDATE miembrogi SET cedula_int='" . $aux_cedula . "', nombre_int= '" . $aux_nombre . "',
		 apellido_int= '" . $aux_apellido . "', estatus_int= '" . $aux_estatus . "', grado_int= '" . $aux_grado . "',
		 inst_int= '" . $aux_inst . "', area_int= '" . $aux_area . "', tel_int= '" . $aux_tel . "', mail_int='" . $aux_mail . "' WHERE no='" . $aux_no . "' ";
	
	mysqli_query($conexion, $sentencia) or die(mysqli_error($conexion));	
}

//echo '<script type="text/javascript"> alert("'.$sentencia.'"); window.location.href = "adm_mienbros.php";</script>';

?>
