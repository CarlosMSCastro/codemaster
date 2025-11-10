<main class="container my-5" style="max-width:1050px;">
  <h1 class="text-center mb-5"><?= $v->nome ?></h1>

  <div class="clearfix">
    <img
      src="<?= $v->imagem ?>"
      alt="<?= $v->nome ?>"
      class="img-fluid float-lg-start me-lg-4 mb-3"
      style="width:50%; max-width:520px; min-width:300px;"
    >

    <p class="text-justify">
      <?= $v->descricao ?>
    </p>
  </div>
</main>
