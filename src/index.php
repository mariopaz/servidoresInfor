<?php
  require "db/productos.php";
  $productos = new Productos;
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Ventas</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
            <img src="logo.png"height="30" alt="">
          </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" href="index.php">Inicio <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="catalogo.php">Catalogo</a>
            <a class="nav-link" href="ingresar.html">Iniciar Sesion</a>
            <a class="nav-link" href="registro.html">Registrarse</a>
          </div>
        </div>
      </nav>
	  <section class="jumbotron text-center">
        <div class="container">
          <h1>Sitio de Ventas</h1>
          <p class="lead text-muted">Encuentra los mejores productos tecnologicos.</p>
          <p>
            <a href="catalogo.php" class="btn btn-primary my-2">Ver Catalogo</a>
          </p>
        </div>
      </section>
	  <main role="main">
      
        <div class="album py-5 bg-light">
          <div class="container">
      
            <div class="row">
            <?php foreach($productos->obtenerDestacados() as $producto) { ?>
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  
                  <img height="240" src="<?= $producto["imagen"]; ?>" alt="" class="card-img-top">
                  <div class="card-body">
                    <p class="card-text"><?= $producto["nombre"]; ?></p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                      </div>
                      <small class="text-muted">$<?= $producto["precio"]; ?></small>
                    </div>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
            <div class="row" style="justify-content: center;">
                <a href="catalogo.php" class="btn btn-primary">Ver m??s</a>
            </div>
          </div>
        </div>
      
      </main>




      
      <footer class="footer mt-auto py-3">
        <div class="container">
          <span class="text-muted">Sitio de Ventas UGB - El Salvador 2021</span>
        </div>
      </footer>
  </body>
</html>