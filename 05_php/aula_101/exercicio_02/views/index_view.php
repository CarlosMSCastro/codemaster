<main>
  <div class="container">
    <div class="row justify-content-center g-3">
      <?php foreach($filmes as $i => $f): ?>
        <div class="col-sm-6 col-md-4 d-flex justify-content-center">
          <div class="card h-100" style="width: 15rem;">
            <a href="filmes.php?id=<?= $i ?>" class="text-decoration-none text-dark d-block h-100">
              <img src="<?= $f['imagem'] ?>" class="card-img-top" alt="<?= $f['titulo'] ?>">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title"><?= $f['titulo'] ?></h5>
                <p class="card-text"><?= substr(strip_tags($f['desc']), 0, 60) ?>...</p>
              </div>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</main>
