<html lang="en">
<?php

/////////// INSERTAR REGISTRO A TABLAS ///////////////////////
$unidad_acad = $_POST['unidad_acad'];
$nombre_grupo = $_POST['nombre_grupo'];
$nombre_coor = $_POST['nombre_coor'];
$acronimo = $_POST['acronimo'];
$fecha_creacion = $_POST['fecha_creacion'];
$obj_grupo = $_POST['obj_grupo'];

/*Verifica que se este registrando los datos
echo 'Unidad Academica: '. $unidad_acad;
echo '<br>';
echo 'Nombre del grupo: ' . $nombre_grupo;
echo '<br>';
echo 'Nombre del Coordinador: ' . $nombre_coor;
echo '<br>';
echo 'Acronimo: ' . $acronimo;
echo '<br>';
echo 'Fecha de creacion: ' . $fecha_creacion;
echo '<br>';
echo 'Objetivo del grupo: ' . $obj_grupo;
echo '<br>';*/

// Sentencia para conectarse a la base de datos
$db = mysqli_connect('localhost', 'root', '', 'g_inv');
echo '<h3>Estamos Conectados!</h3>';

//Query para insertar
$insertar = "INSERT INTO invg (unidad_acad,nombre_grupo,nombre_coor,acronimo,fecha_creacion,obj_grupo) 
VALUES ('$unidad_acad','$nombre_grupo','$nombre_coor','$acronimo','$fecha_creacion','$obj_grupo')";

$resultado = mysqli_query($db, $insertar);

/*/Verificador de que el registro se hizo bien
if (!$resultado) {
    echo '<h3>error </h3>';
    echo '<h3>Por favor vuelva a intentarlo!</h3>';
} else {
    echo '<h3>Bueno</h3>';
    exit;
}*/

//cerrar conexion
mysqli_close($db);
header('location: ../adm_mienbros.php');
?>


</html>