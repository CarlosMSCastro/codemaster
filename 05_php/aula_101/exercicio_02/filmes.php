<?php
require_once 'helpers/funcoes.php';
require_once 'helpers/base_dados.php';
require_once 'components/header.php';

$id = $_GET['id'] ?? null;

if ($id === null || !isset($filmes[$id])) {
    echo "<p>Filme não encontrado.</p>";
} else {
    $f = $filmes[$id];
    require 'views/filmes_view.php';
}

require_once 'components/footer.php';
?>
