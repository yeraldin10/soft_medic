<?php include('../templates/header.php'); ?>
<?php include('../controllers/medicamentosdbconection.php'); ?>

<body class="bd-inicio">
  <div class="container">
    <div class="card text-center">
      <div class="custom-header">
        <h4>Medicamentos</h4>
      </div>
      <form action="" method="post">
        <div class="panel-buscar">
          <input type="text" name="id" id="id" value="<?php echo $medicamento['ID']; ?>" />
          <input type="submit" value="Buscar" name="accion" class="btn btn-info">
        </div>
      </form>
      <form action="" method="post">
        <div class="card-body">
          <div class="div-btn">
            <label for="" class="form-label">Id:</label>
            <input type="text" name="id" id="id" value="<?php echo $medicamento['ID']; ?>" aria-describedby="helpId" placeholder="ID" />
            <label for="" class="form-label">Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="<?php echo $medicamento['Nombre']; ?>" aria-describedby="helpId" placeholder="Nombre" />
            <label for="" class="form-label">Registro Sanitario:</label>
            <input type="text" name="registroSanitario" id="registroSanitario" value="<?php echo $medicamento['RegistroSanitario']; ?>" aria-describedby="helpId" placeholder="Registro Sanitario" />
            <label for="" class="form-label">Proveedor:</label>
            <input type="text" name="proveedor" id="proveedor" value="<?php echo $medicamento['Proveedor']; ?>" aria-describedby="helpId" placeholder="Proveedor" />
            <label for="" class="form-label">Fecha Vencimiento:</label>
            <input type="date" name="fechaVencimiento" id="fechaVencimiento" value="<?php echo $medicamento['FechaVencimiento']; ?>" aria-describedby="helpId" placeholder="Fecha Vencimiento" />
            <label for="" class="form-label">Inventario:</label>
            <input type="text" name="inventario" id="inventario" value="<?php echo $medicamento['Inventario']; ?>" aria-describedby="helpId" placeholder="Inventario" />
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