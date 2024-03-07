<?php include('../templates/header.php'); ?>
<?php include('../controllers/pedidosdbconection.php'); ?>

<body class="bd-inicio">
  <div class="container">
    <div class="card text-center">
      <div class="custom-header">
        <h4>Pedido de Medicamento</h4>
      </div>
      <form action="" method="post">
        <div class="panel-buscar">
          <input type="text" name="id" id="id" value="<?php echo $pedido['ID']; ?>" />
          <input type="submit" value="Buscar" name="accion" class="btn btn-info">
        </div>
      </form>
      <form action="" method="post">
        <div class="card-body">
          <div class="div-btn">
            <label for="" class="form-label">Id Pedido:</label>
            <input type="text" name="id" id="id" value="<?php echo $pedido['ID']; ?>" aria-describedby="helpId" placeholder="ID" />
            <label for="" class="form-label">Medicamento:</label>
            <input type="text" name="idMedicamento" id="idMedicamento" value="<?php echo $pedido['IdMedicamento']; ?>" aria-describedby="helpId" placeholder="Medicamento" />
            <label for="" class="form-label">Cantidad:</label>
            <input type="text" name="cantidad" id="cantidad" value="<?php echo $pedido['Cantidad']; ?>" aria-describedby="helpId" placeholder="Cantidad" />
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