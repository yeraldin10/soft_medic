<?php include('../templates/header.php'); ?>
  <body class="bd-inicio">
    <div class="container">
      <div class="card text-center">
        <div class="custom-header">
          <h4>Reporte de Citas</h4>
        </div>
        <div class="card-body">
            <div class="card text-center">
              <div class="card-header">
                <div class="div-btn">
                    Fecha Reporte:
                  <input type="text" name="nombre" id="nombre" />
                </div>
              </div>
              <div class="card-body">
                <table class="table">
                    <caption>Reporte</caption>
                    <thead>
                      <tr>
                        <th scope="col">id Paciente</th>
                        <th scope="col">Nombre Paciente</th>
                        <th scope="col">Médico</th>
                        <th scope="col">Fecha Citas</th>
                        <th scope="col">Efectiva</th>
                        <th scope="col">Anulada</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
              <div class="card-footer text-muted">
                <a class="btn btn-secondary">Imprimir</a>
              </div>
            </div>
        </div>
      </div>
      <div class="cont-botones">
        <a href="menu.html" class="btn btn-primary">Menú Principal</a>
        <a href="index.html" class="btn btn-primary">Cerrar Sesión</a>
      </div>
    </div>
  </body>
 <?php include('../templates/footer.php'); ?>