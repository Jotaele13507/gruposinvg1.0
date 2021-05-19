<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="#">Bienvenido</a> -->
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
         <!-- <li><a href="index.php">Inicio</a></li>
        <li><a href="mi_grupo.php">Mi Grupo</a></li> -->
        <?php if (!isset($_SESSION["usuario"])) { ?>
          <li><a href="login.php">Login</a></li>
          <li><a href="registro.php">Registro</a></li>
        <?php } else {
        ?>
          <?php if ($_SESSION["usuario"]["privilegio"] == 1) { ?>
           <!-- <li><a href="index.php">Inicio</a></li> -->
            <li><a href="mi_grupo.php">Mi Grupo</a></li>
            <li ><a href="adm_mienbros.php">Adm. Miembros</a></li>
            <li class="active"><a href="admin.php">Coordinador</a></li>
            <li><a href="cerrar-sesion.php">Cerrar Sesión</a></li>
          <?php } else { ?>
            <li class="active"><a href="usuario.php">Miembro</a></li>
            <li><a href="cerrar-sesion.php">Cerrar Sesión</a></li>
        <?php }
        } ?>
      </ul>
    </div>
    <!--/.nav-collapse -->
  </div>
</nav>