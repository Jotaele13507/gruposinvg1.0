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
	$aux = $_GET['id_titulo'];
	echo $aux;
/*
	$sentencia="DELETE FROM productos WHERE no=".$aux;
    mysqli_query($conexion, $sentencia) or die (mysqli_error($conexion));
*/
	EliminarProyecto($aux,$conexion);

	function EliminarProyecto($aux,$conexion)
	{
		$sentencia="DELETE FROM proyegi WHERE id_titulo=".$aux;
		mysqli_query($conexion, $sentencia) or die (mysqli_error($conexion));

	}

?>

<script type="text/javascript">
	alert("Proyecto Eliminado exitosamente");
	window.location.href='proyectos.php';
</script>