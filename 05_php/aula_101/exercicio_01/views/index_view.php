<main>
  <div class="container-fluid ">
    <div class="row g-3 justify-content-center">
      <?php foreach($filmes as $f): ?>
      <div class="col-auto d-flex mb-4">
        <div class="card" style="width: 15rem;">
          <img src="<?= $f['imagem'] ?>" class="card-img-top" alt="<?= $f['titulo'] ?>">
          <div class="card-body">
            <h5 class="card-title"><?= $f['titulo'] ?></h5>
            <p class="card-text"><?= $f['texto'] ?></p>
            <a href="#" class="btn btn-dark">Mais informações</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</main>