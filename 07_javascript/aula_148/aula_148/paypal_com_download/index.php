<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 148.1</title>

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</head>
<body>

  <div class="container-fluid text-center my-5">
    <div class="row">
      <div class="col-12 px-0 d-flex flex-wrap justify-content-center gap-3">

        <form class="card" style="width: 18rem;" method="post" action="paypal/pagamento.php">
          <input type="hidden" name="total_a_pagar" value="10">
          <input type="hidden" name="id_produto" value="1">
          <img src="https://picsum.photos/id/684/600/400" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Produto 1</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
            <button class="btn btn-primary">
              Comprar
              <br>
              (10,00 €)
            </button>
          </div>
        </form>

        <form class="card" style="width: 18rem;" method="post" action="paypal/pagamento.php">
          <input type="hidden" name="total_a_pagar" value="5">
          <input type="hidden" name="id_produto" value="2">
          <img src="https://picsum.photos/id/684/600/400" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Produto 1</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
            <button class="btn btn-primary">
              Comprar
              <br>
              (5,00 €)
            </button>
          </div>
        </form>

        <form class="card" style="width: 18rem;" method="post" action="paypal/pagamento.php">
          <input type="hidden" name="total_a_pagar" value="25">
          <input type="hidden" name="id_produto" value="3">
          <img src="https://picsum.photos/id/684/600/400" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Produto 1</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
            <button class="btn btn-primary">
              Comprar
              <br>
              (25,00 €)
            </button>
          </div>
        </form>

        <form class="card" style="width: 18rem;" method="post" action="paypal/pagamento.php">
          <input type="hidden" name="total_a_pagar" value="12.34">
          <input type="hidden" name="id_produto" value="4">
          <img src="https://picsum.photos/id/684/600/400" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Produto 1</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
            <button class="btn btn-primary">
              Comprar
              <br>
              (12,34 €)
            </button>
          </div>
        </form>

      </div>
    </div>
  </div>

</body>
</html>