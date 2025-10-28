
  <main>

    <div class="container my-5">
      <div class="row justify-content-center g-1">

      <?php foreach($servicos as $s): ?>
        <div class="col-md-4 d-flex">
          <div class="card" style="width: 250px;  height: 400px;">
            <img src="img/sv1.jpeg" class="card-img-top" alt="sv1">
            <div class="card-body">
              <h5 class="card-title">Card 1</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
              <a href="#" class="btn btn-secondary">Go somewhere</a>
            </div>
          </div>
        </div>

      <?php endforeach ?>

      </div>
    </div>
  </main>
