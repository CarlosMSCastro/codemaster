<?php

$form = !empty($_GET["termo"]);
$termo = '';
$ids = [];

if($form){
    $termo = $_GET["termo"];
    $ids = pesquisar($termo);
}

?>

<main class="container my-5">

  <div class="row mb-4">
    <div class="col-12 text-center">
      <h1 class="fs-3 ms-3">Resultados para: "<?= $termo ?>"</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-12 d-flex flex-wrap justify-content-center gap-4">

      <?php foreach($ids as $i): ?>
          <?php $f = $filmes[$i]; ?>
          <a href="filmes.php?id=<?= $i ?>" class="card bg-light text-decoration-none" style="width: 18rem;">
            <img src="<?= $f->imagem ?>" class="card-img-top" alt="<?= $f->titulo ?>">
            <div class="card-body">
              <h5 class="card-title text-center"><?= $f->titulo ?></h5>
              <p class="card-text"><?= substr(strip_tags($f->desc), 0, 80) ?>...</p>
            </div>
          </a>
      <?php endforeach; ?>

    </div>
  </div>

</main>
