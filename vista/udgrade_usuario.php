<?php
	//include "conexion.php";

	$user ='root';
	$password='';
	$db='g_inv';
	$localhost='localhost';
	
	$conexion = mysqli_connect($localhost, $user, $password, $db);
	
	
	if ($conexion -> connect_errno){
	die( "Fallo la conexión : (" . $conexion -> mysqli_connect_errno() 
	. ") " . $conexion -> mysqli_connect_error());
	}

	error_reporting(E_ALL ^ E_NOTICE);
	$aux = $_GET['id'];
	echo $aux;
/*
	$sentencia="DELETE FROM productos WHERE no=".$aux;
    mysqli_query($conexion, $sentencia) or die (mysqli_error($conexion));
*/
	UdgradeUsuario($aux,$conexion);

	function UdgradeUsuario($aux,$conexion)
	{
		$sentencia="UPDATE usuarios SET privilegio = 1 WHERE id=".$aux;
		mysqli_query($conexion, $sentencia) or die (mysqli_error($conexion));

	}

?>

<script type="text/javascript">
	alert("Upgrade realizado exitosamente");
	window.location.href='adm_usuarios.php';
</script>