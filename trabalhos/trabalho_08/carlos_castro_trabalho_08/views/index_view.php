<main>
  <h1 class="mb-5">Home</h1>
  <div class="container-fluid px-5">
    <div class="row justify-content-center g-4">
      <?php foreach($viagens as $i => $v): ?>
        <div class="col-sm-6 col-md-4">
          <div class="card h-100" style="width: 15rem;">
            <a href="viagem.php?id=<?= $i ?>" class="text-decoration-none text-dark d-block h-100">
              <img src="<?= $v->imagem ?>" class="card-img-top" alt="<?= $v->nome ?>">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title"><?= $v->nome ?></h5>
                <p class="card-text"><?= substr(strip_tags($v->descricao), 0, 60) ?>...</p>
              </div>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</main>