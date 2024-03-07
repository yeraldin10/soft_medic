<?php include('../templates/header.php'); ?>
<?php include('../controllers/citasdbconection.php'); ?>

<body class="bd-inicio">
  <div class="container">
    <div class="card text-center">
      <div class="custom-header">
        <h4>Citas</h4>
      </div>
      <form action="" method="post">
        <div class="panel-buscar">
          <input type="text" name="id" id="id" value="<?php echo $cita['ID']; ?>" />
          <input type="submit" value="Buscar" name="accion" class="btn btn-info">
        </div>
      </form>
      <form action="" method="post">
        <div class="card-body">
          <div class="div-btn">
            <label for="" class="form-label">Id:</label>
            <input type="text" name="id" id="id" value="<?php echo $cita['ID']; ?>" aria-describedby="helpId" placeholder="ID" />
            <label for="" class="form-label">Fecha:</label>
            <input type="date" name="fecha" id="fecha" value="<?php echo $cita['Fecha']; ?>" aria-describedby="helpId" placeholder="Fecha" />
            <label for="" class="form-label">Hora:</label>
            <input type="time" name="hora" id="hora" value="<?php echo $cita['Hora']; ?>" aria-describedby="helpId" placeholder="Hora" />
            <label for="" class="form-label">IdPaciente: :</label>
            <input type="text" name="idPaciente" id="idPaciente" value="<?php echo $cita['IdPaciente']; ?>" aria-describedby="helpId" placeholder="IdPaciente" />
            <label for="" class="form-label">Id consultorios:</label>
            <input type="text" name="idConsultorio" id="direccion" value="<?php echo $cita['IdConsultorio']; ?>" aria-describedby="helpId" placeholder="IdConsultorio" />
            <label for="" class="form-label">Id Empleado:</label>
            <input type="text" name="idEmpleado" id="idEmpleado" value="<?php echo $cita['IdEmpleado']; ?>" aria-describedby="helpId" placeholder="Idempleado" />
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