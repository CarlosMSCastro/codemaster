<?php

require_once "helpers/funcoes.php";
require_once "helpers/base_dados.php";

?>
<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agencia de Viagens 2.0</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <div class="container-fluid p-0">
      <div class="row m-0">
        <div class="col-12 p-0">
          <nav class="navbar navbar-expand-sm bg-danger navbar-dark">
            <a class="navbar-brand mx-1" href="#">Agencia de Viagens 2.0</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Viagens
                  </a>
                  <ul class="dropdown-menu">
                    <?php foreach($viagens as $i => $v): ?>
                      <li>
                        <a class="dropdown-item" href="viagem.php?nome=<?= $v->nome ?>">
                          <?= $v->nome ?>
                        </a>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </li>
              </ul>
            </div>
            <form class="d-flex ms-auto" role="search" action="pesquisa.php">
              <input class="form-control me-2" type="search" placeholder="Destino" name="termo" aria-label="Search" required>
              <button class="btn btn-outline-light me-2" type="submit">Procurar</button>
            </form>
          </nav>
        </div>
      </div>
    </div>
    <div class="container-fluid m-0 p-0">
      <div class="row m-0 p-0">
        <div class="col-12 m-0 p-0 mb-5">
          <div id="carousel1" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000" style="max-height: 720px; overflow:hidden;">
              <div class="carousel-indicators">
                  <?php foreach ($slides as $i => $s): ?>
                      <button type="button" data-bs-target="#carousel1" data-bs-slide-to="<?= $i ?>" class="<?= $i === 0 ? 'active' : '' ?>" aria-current="<?= $i === 0 ? 'true' : 'false' ?>" aria-label="Slide <?= $i + 1 ?>">
                      </button>
                  <?php endforeach; ?>
              </div>
              <div class="carousel-inner">
                  <?php foreach ($slides as $i => $s): ?>
                      <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">
                          <img src="<?= $s->imagem ?>" class="d-block w-100"  style="height: 720px; object-fit: cover; object-position:center;">
                          <div class="carousel-caption d-none d-md-block">
                              <h5><?= $s->titulo ?></h5>
                              <p><?= $s->texto ?></p>
                          </div>
                      </div>
                  <?php endforeach; ?>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
              </button>
          </div>
        </div>
      </div>
    </div>
  </header>