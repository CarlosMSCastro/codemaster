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

  <div class="text-center mb-5">
    <h1 class="fs-1">Pesquisa</h1>

    <?php if($form && !empty($ids)): ?>
      <h2 class="fs-4">Resultados para: "<?= $termo ?>"</h2>
    <?php endif; ?>
  </div>

  <?php if($form && empty($ids)): ?>
    <p class="text-center text-muted fs-5">Nenhum resultado encontrado.</p>
  <?php endif; ?>

  <div class="d-flex flex-wrap justify-content-center gap-4">

    <?php foreach($ids as $i): ?>
        <?php $v = $viagens[$i]; ?>
        <a href="viagem.php?id=<?= $i ?>" class="card bg-light text-decoration-none shadow-sm" style="width: 18rem;">
          <img src="<?= $v->imagem ?>" class="card-img-top" alt="<?= $v->nome ?>">
          <div class="card-body">
            <h5 class="card-title text-center"><?= $v->nome ?></h5>
            <p class="card-text"><?= substr(strip_tags($v->descricao), 0, 80) ?>...</p>
          </div>
        </a>
    <?php endforeach; ?>

  </div>

</main>


