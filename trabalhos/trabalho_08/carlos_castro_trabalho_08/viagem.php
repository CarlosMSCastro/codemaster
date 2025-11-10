<?php
require_once 'helpers/funcoes.php';
require_once 'helpers/base_dados.php';
require_once 'components/header.php';

$id = $_GET['id'] ?? null;

if ($id === null || !isset($viagens[$id])) {
    echo "<p>Viagem não encontrado.</p>";
} else {
    $v = $viagens[$id];
    require 'views/viagem_view.php';
}

require_once 'components/footer.php';
?>
