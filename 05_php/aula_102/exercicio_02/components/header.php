<?php

require_once "helpers/funcoes.php";
require_once "helpers/base_dados.php";

?>
<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Filmes - Componentização e Automação</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <div class="container-fluid p-0">
      <div class="row m-0">
        <div class="col-12 p-0">
          <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <a class="navbar-brand" href="#"><img src="img/movie.png" alt=""></a>
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
                    Filmes
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark">
                  <?php foreach($filmes as $i => $f): ?>
                    <li><a class="dropdown-item" href="filmes.php?id=<?= $i ?>"><?= $f['titulo']?></a></li>
                  <?php endforeach; ?>
                  </ul>
                </li>
              </ul>
            </div>
            <form class="d-flex ms-auto" role="search" action="pesquisa.php">
              <input class="form-control me-2" type="search" placeholder="Procurar um filme" name="termo" aria-label="Search" required>
              <button class="btn btn-outline-light" type="submit">Procurar</button>
            </form>
          </nav>
        </div>
      </div>
    </div>
    <div class="container-fluid m-0 p-0">
      <div class="row m-0 p-0">
        <div class="col-12 m-0 p-0 mb-5">
          <div id="carousel1" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
              <div class="carousel-indicators">
                  <?php foreach ($filmes as $i => $c): ?>
                      <button type="button" data-bs-target="#carousel1" data-bs-slide-to="<?= $i ?>" class="<?= $i === 0 ? 'active' : '' ?>" aria-current="<?= $i === 0 ? 'true' : 'false' ?>" aria-label="Slide <?= $i + 1 ?>">
                      </button>
                  <?php endforeach; ?>
              </div>
              <div class="carousel-inner">
                  <?php foreach ($filmes as $i => $c): ?>
                      <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">
                          <img src="<?= $c['banner'] ?>" class="d-block w-100" alt="<?= $c['titulo'] ?>">
                          <div class="carousel-caption d-none d-md-block">
                              <h5><?= $c['titulo'] ?></h5>
                              <p><?= substr(strip_tags($f['desc']), 0, 60) ?></p>
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