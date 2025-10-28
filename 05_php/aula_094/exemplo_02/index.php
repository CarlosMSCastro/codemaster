
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 93-Ex.3-Entrada</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="caixa">
    <form action="saida.php" method="post" enctype="multipart/form-data">
      <h1>Dados Pessoais</h1>
      <input type="text" name="nome" id="nome" placeholder="Nome" required autofocus><br>
      <input type="file" name="foto" id="foto" placeholder="Foto de Perfil" required><br>
      <input type="text" name="desc" id="desc" placeholder="Descrição" required><br>
      <input type="number" name="perfant" id="perfant" placeholder="Nº Perfis Anteriores">
      <input type="number" name="perfpos" id="perfpos" placeholder="Nº Perfis Posteriores"><br>
      <input type="submit" value="Registar">
    </form>
  </div>


</body>
</html>