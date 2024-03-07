<?php include('../templates/header.php'); ?>
<?php include('../controllers/tratamientosdbconection.php'); ?>

<body class="bd-inicio">
  <div class="container">
    <div class="card text-center">
      <div class="custom-header">
        <h4>Tratamientos</h4>
      </div>
      <form action="" method="post">
        <div class="panel-buscar">
          <input type="text" name="id" id="id" value="<?php echo $tratamiento['ID']; ?>" />
          <input type="submit" value="Buscar" name="accion" class="btn btn-info">
        </div>
      </form>
      <form action="" method="post">
        <div class="card-body">
          <div class="div-btn">
            <label for="" class="form-label">Id:</label>
            <input type="text" name="id" id="id" value="<?php echo $tratamiento['ID']; ?>" aria-describedby="helpId" placeholder="ID" />
            <label for="" class="form-label">Posología:</label>
            <input type="text" name="posologia" id="posologia" value="<?php echo $tratamiento['Posologia']; ?>" aria-describedby="helpId" placeholder="Posologia" />
            <label for="" class="form-label">Medicamento:</label>
            <input type="text" name="medicamento" id="medicamento" value="<?php echo $tratamiento['Medicamento']; ?>" aria-describedby="helpId" placeholder="Medicamento" />
            <label for="" class="form-label">Paciente:</label>
            <input type="text" name="idPaciente" id="idPaciente" value="<?php echo $tratamiento['IdPaciente']; ?>" aria-describedby="helpId" placeholder="Paciente" />
            <label for="" class="form-label">Médico:</label>
            <input type="text" name="idMedico" id="idMedico" value="<?php echo $tratamiento['IdMedico']; ?>" aria-describedby="helpId" placeholder="Médico" />
            <label for="" class="form-label">Fecha Consulta:</label>
            <input type="date" name="fechaConsulta" id="fechaConsulta" value="<?php echo $tratamiento['FechaConsulta']; ?>" aria-describedby="helpId" placeholder="Fecha Consulta" />
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