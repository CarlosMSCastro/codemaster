<?php
require_once "bootstrap.php";


if(!empty($_POST)){
  $username = $_POST["username"] ?? "";
  $password = $_POST["password"] ?? "";

  fazer_login($username, $password);

  $erro = "Login inválido. Tente novamente.";
}
?>

<?php require_once "components/header.php"; ?>

<div class="caixa">
  <form method="POST">
    <h2>Login</h2>
    
    <?php if(!empty($erro)): ?>
      <p style="color:red;"><?php echo $erro; ?></p>
    <?php endif; ?>

    <input type="text" name="username" placeholder="Nome" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>

    <button type="submit">Entrar</button>
  </form>
</div>

<?php require_once "components/footer.php"; ?>
