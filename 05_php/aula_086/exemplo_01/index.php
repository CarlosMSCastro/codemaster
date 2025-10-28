<?php
$nome = "Carlos";
$tema = "grey";
?>



<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ExercicioPHP</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    body{background-color: <?php echo $tema ?>}
  </style>
</head>
<body>
  <header>
    <h1>Site Fixe</h1>
    <div class="banner">
      <img src="imagens/01.jpg" alt="agua">
    </div>
    <nav>
      <a href="#">Home</a>
      <a href="#">Produtos</a>
      <a href="#">Serviços</a>
      <a href="#">Contactos</a>
  </header>

  <main>
    <h2>Bem-Vindo <?php echo $nome ?></h2>
    <div class="texto">
      <img src="imagens/02.jpg" alt="Montanhas" widht="200">
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis omnis ipsum fugit perspiciatis dicta quis, adipisci, dignissimos in expedita dolor animi suscipit temporibus quasi excepturi atque architecto rerum minus veritatis?</p>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis omnis ipsum fugit perspiciatis dicta quis, adipisci, dignissimos in expedita dolor animi suscipit temporibus quasi excepturi atque architecto rerum minus veritatis?</p>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis omnis ipsum fugit perspiciatis dicta quis, adipisci, dignissimos in expedita dolor animi suscipit temporibus quasi excepturi atque architecto rerum minus veritatis?</p>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis omnis ipsum fugit perspiciatis dicta quis, adipisci, dignissimos in expedita dolor animi suscipit temporibus quasi excepturi atque architecto rerum minus veritatis?</p>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis omnis ipsum fugit perspiciatis dicta quis, adipisci, dignissimos in expedita dolor animi suscipit temporibus quasi excepturi atque architecto rerum minus veritatis?</p>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis omnis ipsum fugit perspiciatis dicta quis, adipisci, dignissimos in expedita dolor animi suscipit temporibus quasi excepturi atque architecto rerum minus veritatis?</p>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis omnis ipsum fugit perspiciatis dicta quis, adipisci, dignissimos in expedita dolor animi suscipit temporibus quasi excepturi atque architecto rerum minus veritatis?</p>
    </div>
  </main>
  <footer>

  </footer>

</body>
</html>