<?php

require_once("funcoes.php");

$form = isset($_POST["perfant"],$_POST["perfpos"]) && !empty($_POST["nome"]) && isset($_FILES["foto"]);

if($form){
  $desc = $_POST["desc"];
  $nome = $_POST["nome"];
  $perfant = intval($_POST["perfant"]);
  $perfpos = intval($_POST["perfpos"]);
  $lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt.";
  
  //Opcional para usar a data como prefixo
  date_default_timezone_set("Europe/Lisbon")
  $date = date("Y_m_d_H_i_s");

  //captura o ficheiro
  $foto = $_FILES["foto"];

  //Informa onde foi movido temporariamente para o servidor
  $nome_temp = $foto["tmp_name"];

  //Informa o nome original do ficheiro para saber a sua extensao .png .jpg etc
  $nome_original = $foto["name"];

  // Sitio para onde se vai mover o ficheiro (/uploads)
  $destino = "uploads/" . $date . "_" . $nome . "_" . $nome_original;

  //transformar de bytes em MB
  $tamanho = $foto["size"] / 1024 / 1024; 
  
  //Verficia que o ficheiro tem, neste caso, menos de 0.6mb
  if($tamanho <= 0.6){
    move_uploaded_file($nome_temp, $destino);
  }
  else{
    echo "div style='color: red;'>Ficheiro muito grande</div>";
  }
  
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 93-Ex.3-Saída</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div>
    <a href="index.php">Voltar</a>
  </div>
  <div class="container">
    <?php
    for ($i = 1; $i <= $perfant; $i++) {
      $imgNum = rand(1, 16);
      echo '<div class="cartao">';
      echo '<div class="cartao-img"><img src="img/' . $imgNum . '.png" alt="Perfil Anterior ' . $i . '"></div>';
      echo '<div class="cartao-info">';
      echo '<h2>Perfil Anterior ' . $i . '</h2>';
      echo '<p>' . $lorem . '</p>';
      echo '</div>';
      echo '</div>';
      }
    ?>
  
    <div class="cartao" id="perfil-principal">
      <div class="cartao-img">
        <img src="<?= $destino ?>" alt="Foto de <?= $nome ?>">
      </div>
      <div class="cartao-info">
        <h2><?= $nome ?></h2>
        <p><?= $desc ?></p>
      </div>
    </div>

      <?php
        for ($i = 1; $i <= $perfpos; $i++) {
          $imgNum = rand(1, 16);
          echo '<div class="cartao">';
          echo '<div class="cartao-img"><img src="img/' . $imgNum . '.png" alt="Perfil Posterior ' . $i . '"></div>';
          echo '<div class="cartao-info">';
          echo '<h2>Perfil Posterior ' . $i . '</h2>';
          echo '<p>' . $lorem . '</p>';
          echo '</div>';
          echo '</div>';
    }
    ?>

  </div>

</body>
</html>