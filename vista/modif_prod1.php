  <!DOCTYPE html>
  <?php include 'partials/head.php'; ?>
  <?php include 'partials/menu.php'; ?>
  <html lang="en">

  <head>
    <title>MODIFICACIÓN DE MIEMBROS</title>
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
    error_reporting(E_ALL ^ E_NOTICE);
    $user = 'root';
    $password = '';
    $db = 'g_inv';
    $localhost = 'localhost';

    $conexion = mysqli_connect($localhost, $user, $password, $db);

    $aux = $_GET['no'];

    ConsultarProducto($aux, $conexion);

    function ConsultarProducto($aux, $conexion)
    {
      $sentencia = "SELECT * FROM miembrogi WHERE no=" . $aux;
      $resultado = mysqli_query($conexion, $sentencia) or die(mysqli_error($conexion));
      $filas = mysqli_fetch_assoc($resultado);
      return [
        $filas['cedula_int'],
        $filas['nombre_int'],
        $filas['apellido_int'],
        $filas['estatus_int'],
        $filas['grado_int'],
        $filas['inst_int'],
        $filas['area_int'],
        $filas['tel_int'],
        $filas['mail_int'],
      ];
    }
    ?>

    <div class="container-contact100" style="background-image: url('images/bg-01.jpg');">
      <div class="wrap-contact100">
        <form class="contact100-form validate-form" method="POST" action="modif_prod2.php">
          <span class="contact100-form-title">
            MODIFICACIÓN DE MIEMBROS
          </span>
          <input type="hidden" name="no" value="<?php echo $_GET['no'] ?> ">
          <div class="wrap-input100 ">
            <span class="label-input100">Cédula</span>
            <input class="input100" type="text" name="cedula_int" value="<?php echo $filas['cedula_int'] ?>" required>
          </div>

          <div class="wrap-input100 rs1-wrap-input100">
            <span class="label-input100">Nombre</span>
            <input class="input100" type="text" name="nombre_int" value="<?php echo $GET['nombre_int'] ?>" required>
          </div>

          <div class="wrap-input100 rs1-wrap-input100">
            <span class="label-input100">Apellido</span>
            <input class="input100" type="text" name="apellido_int" value="<?php echo $GET['apellido_int'] ?>" required>
          </div>

          <div class="wrap-input100 rs1-wrap-input100 validate-input">
            <span class="label-input100">Estatus</span>
            <input class="input100" type="text" name="estatus_int" value="<?php echo $GET['estatus_int'] ?>" required>
          </div>

          <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Ejemplo: Grado más alto alcanzado">
            <span class="label-input100">Grado</span>
            <input class="input100" type="text" name="grado_int" value="<?php echo $GET['grado_int'] ?>" required>
          </div>

          <div class="wrap-input100 ">
            <span class="label-input100">Institución</span>
            <input class="input100" type="text" name="inst_int" value="<?php echo $GET['inst_int'] ?>" required>
          </div>

          <div class="wrap-input100 ">
            <span class="label-input100">Área de interés</span>
            <input class="input100" type="text" name="area_int" value="<?php echo $GET['area_int'] ?>" required>
          </div>

          <div class="wrap-input100 rs1-wrap-input100">
            <span class="label-input100">Teléfono</span>
            <input class="input100" type="text" name="tel_int" value="<?php echo $GET['tel_int'] ?>" required>
          </div>

          <div class="wrap-input100 rs1-wrap-input100">
            <span class="label-input100">Correo Electrónico</span>
            <input class="input100" type="text" name="mail_int" value="<?php echo $GET['mail_int'] ?>" required>
          </div>

          <div class="container-contact100-form-btn">
            <div class="wrap-contact100-form-btn">
              <div class="contact100-form-bgbtn"></div>
              <button class="contact100-form-btn" type="submit" class="btn">
                MODIFICAR
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>

  </html>