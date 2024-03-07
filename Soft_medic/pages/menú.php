<?php include('../templates/header.php'); ?>
<body class="bd-inicio">
    <div class="container">
      <div class="card text-center">
        <div class="custom-header">
          <h4>Menú Principal</h4>
        </div>
        <div class="card-body">
          <div class="div-btn">
            <a href="pacientes.php" class="btn btn-info">Pacientes</a>
            <a href="empleados.php" class="btn btn-info">Empleados</a>
            <a href="citas.php" class="btn btn-info">Citas Médicas</a>
            <a href="consultorios.php" class="btn btn-info">Consultorios</a>
            <a href="medicamentos.php" class="btn btn-info">Medicamentos</a>
            <a href="pedidos.php" class="btn btn-info">Pedido de Medicamentos</a>
            <a href="tratamientos.php" class="btn btn-info">Tratamientos</a>
            <a href="reportecitas.php" class="btn btn-info">Reporte de Citas</a>
          </div>
        </div>
        <div class="card-footer text-muted">
          <a href="index.html" class="btn btn-secondary">Cerrar sesión</a>
        </div>
      </div>
    </div>
</body>
<?php include('../templates/footer.php'); ?>