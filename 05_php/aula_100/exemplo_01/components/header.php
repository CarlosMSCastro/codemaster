<?php

require_once "helpers/funcoes.php";
require_once "helpers/globais.php";

?>



<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 099- Exercicio 01</title>
  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  <!-- CSS Local -->
  <link rel="stylesheet" href="../style.css">
</head>
<body> 

  <header>
    <div class="row m-0 p-0">
      <div class="col-12 m-0 p-0">
        <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="img/logo.svg" alt="Logo" width="40" height="40" class="d-inline-block align-text-top"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="serviços.php">Serviços</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Produtos
                  </a>
                  <ul class="dropdown-menu">

                  <?php foreach($produtos as $p): ?>
                    <li><a class="dropdown-item" href="produto1.php"><?=$p["titulo"] ?></a></li>
                  <?php endforeach ?>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contactos.php">Contactos</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <div id="carousel1" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carousel1" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carousel1" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/2.jpg" class="d-block w-100" alt="img1">
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/1.webp" class="d-block w-100" alt="img2">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide</h5>
                <p>Some representative placeholder content for the second slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/3.webp" class="d-block w-100" alt="img3">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>