<?php require 'config.php'; ?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Loja simples - PayPal</title>
</head>
<body>
  <h1>Produto de exemplo</h1>
  <p>Nome: Caneca legal — Preço: EUR 10.00</p>

  <!-- Carrega o JS SDK do PayPal (substitua client-id dinamicamente para não expor secret) -->
  <script src="https://www.paypal.com/sdk/js?client-id=<?php echo PAYPAL_CLIENT_ID; ?>&currency=EUR"></script>

  <div id="paypal-button-container"></div>

  <script>
    paypal.Buttons({
      createOrder: function(data, actions) {
        // chama nosso endpoint server-side que cria a ordem e retorna orderID
        return fetch('create-order.php', { method: 'post' })
          .then(res => res.json())
          .then(data => data.id); // espera { "id": "ORDERID..." }
      },
      onApprove: function(data, actions) {
        // captura pagamento no servidor
        return fetch('capture-order.php', {
          method: 'post',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({ orderID: data.orderID })
        })
        .then(res => res.json())
        .then(details => {
          if (details.status === 'COMPLETED' || details.status === 'COMPLETED' || details.status === 'completed') {
            alert('Pagamento concluído — obrigado!');
            // Aqui você salvaria no BD, enviaria email, etc.
          } else {
            alert('Pagamento: ' + JSON.stringify(details));
          }
        })
        .catch(err => alert('Erro: ' + err));
      },
      onError: function(err) {
        console.error(err);
        alert('Erro no checkout: ' + err);
      }
    }).render('#paypal-button-container');
  </script>
</body>
</html>
