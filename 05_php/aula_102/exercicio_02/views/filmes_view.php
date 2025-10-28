<main class="container my-5">
  <div class="row justify-content-center align-items-center">
    
    <div class="col-auto text-center mb-4 mb-md-0">
      <img src="<?= $f['imagem'] ?>" class="img-fluid shadow rounded" alt="<?= $f['titulo'] ?>" style="max-width: 350px;">
    </div>
    <div class="col-auto">
      <h1 class="mb-2"><?= $f['titulo'] ?></h1>
      <div class="mx-auto text-start" style="max-width: 280px;">
        <p id=desc><?= $f['desc'] ?></p>
      </div>
    </div>
    
  </div>
</main>
