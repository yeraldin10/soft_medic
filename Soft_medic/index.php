<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./estilos/stilos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Inicio</title>
  </head>
<header>
    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <div>
            <img class="img-logo" src="./src/images/logo.png" />
            </div>
            <div id="bar-titulo">
            <a class="navbar-brand" href="#">
                <h3>CONSULTORIO MÉDICO</h3>
            </a>
            <a class="navbar-brand" href="#">
                <h3>SOFT MEDIC</h3>
            </a>
            <a class="navbar-brand" href="#">
                <h6>¡Prestando servicios de salud con calidez humana!</h6>
            </a>
            </div>
            <div>
            <img class="img-logo" src="./src/images/salud.png" />
            </div>
        </nav>
    </div>
</header>
  <body class="bd-inicio">
    <div class="container">
      <form action="./pages/menú.php" method="post">
        <div class="card text-center">
          <div class="custom-header">
            <h4>Inicio</h4>
          </div>
          <div class="card-body">
            <input
              type="text"
              name="nombre"
              id="nombre"
              placeholder="Usuario"
            />
            <input
              type="password"
              name="nombre"
              id="nombre"
              placeholder="Contraseña"
            />
            <button type="submit" class="btn btn-primary">Ingresar</button>
          </div>
          <div class="card-footer text-muted">
            <img id="img-doctores" src="./src/images/doctores.jpg" />
          </div>
        </div>
      </form>  
    </div>
  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"
  >
</script>
<footer>
    <div class="card">
        <div class="card-header mx-auto" >
            Digital Development
        </div>
    </div>
</footer>
</html>
