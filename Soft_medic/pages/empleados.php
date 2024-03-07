<?php include('../templates/header.php'); ?>
<?php include('../controllers/empleadosdbconection.php'); ?>

<body class="bd-inicio">
  <div class="container">
    <div class="card text-center">
      <div class="custom-header">
        <h4>Empleados</h4>
      </div>
      <form action="" method="post">
        <div class="panel-buscar">
          <input type="text" name="id" id="id" value="<?php echo $empleado['ID']; ?>" />
          <input type="submit" value="Buscar" name="accion" class="btn btn-info">
        </div>
      </form>
      <form action="" method="post">
        <div class="card-body">
          <div class="div-btn">
            <label for="" class="form-label">Id:</label>
            <input type="text" name="id" id="id" value="<?php echo $empleado['ID']; ?>" aria-describedby="helpId" placeholder="ID" />
            <label for="" class="form-label">Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="<?php echo $empleado['Nombre']; ?>" aria-describedby="helpId" placeholder="Nombre" />
            <label for="" class="form-label">Apellidos:</label>
            <input type="text" name="apellidos" id="apellidos" value="<?php echo $empleado['Apellidos']; ?>" aria-describedby="helpId" placeholder="Apellidos" />
            <label for="" class="form-label">Fecha Nacimiento:</label>
            <input type="date" name="fechaNacimiento" id="fechaNacimiento" value="<?php echo $empleado['FechaNacimiento']; ?>" aria-describedby="helpId" placeholder="Fecha de Nacimiento" />
            <label for="" class="form-label">Dirección:</label>
            <input type="text" name="direccion" id="direccion" value="<?php echo $empleado['Direccion']; ?>" aria-describedby="helpId" placeholder="Dirección" />
            <label for="" class="form-label">Mail:</label>
            <input type="text" name="mail" id="mail" value="<?php echo $empleado['Mail']; ?>" aria-describedby="helpId" placeholder="Mail" />
            <label for="" class="form-label">Teléfono:</label>
            <input type="text" name="telefono" id="telefono" value="<?php echo $empleado['Telefono']; ?>" aria-describedby="helpId" placeholder="Teléfono" />
            <label for="" class="form-label">Cargo:</label>
            <input type="text" name="cargo" id="cargo" value="<?php echo $empleado['Cargo']; ?>" aria-describedby="helpId" placeholder="Cargo" />
          </div>
        </div>
        <div class="card-footer text-muted">
          <button type="submit" name="accion" value="nuevo" class="btn btn-secondary">Nuevo</button>
          <button type="submit" name="accion" value="actualizar" class="btn btn-secondary">Actualizar</button>
          <button type="submit" name="accion" value="eliminar" class="btn btn-secondary">Eliminar</button>
        </div>
    </div>
    </form>
    <div class="cont-botones">
      <a href="menú.php" class="btn btn-primary">Menú Principal</a>
      <a href="index.html" class="btn btn-primary">Cerrar Sesión</a>
    </div>
  </div>
</body>
<?php include('../templates/footer.php'); ?>