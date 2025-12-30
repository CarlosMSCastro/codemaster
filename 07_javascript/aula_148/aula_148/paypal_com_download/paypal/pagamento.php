<?php

if(!isset($_POST["total_a_pagar"])){
    header("Location: cancelado.php");
    exit;
}
$url_completa = "http://localhost/codemaster_15/exercicios/07_javascript/aula_148/exercicio_01/paypal/";

require 'vendor/autoload.php';

use PayPal\Api\Amount;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;

// Configuração do API Context
$apiContext = new ApiContext(
    new OAuthTokenCredential(
        "???",     // Substitua pelo seu Client ID
        "???"  // Substitua pelo seu Client Secret
    )
);
$apiContext->setConfig([
    'mode' => 'sandbox', // Certifique-se de que está usando 'sandbox'
]);

// Criação do Payer
$payer = new Payer();
$payer->setPaymentMethod('paypal');

// Definindo o Amount
$amount = new Amount();
$amount->setTotal($_POST["total_a_pagar"]);
$amount->setCurrency('EUR');

// Criando a Transação
$transaction = new Transaction();
$transaction->setAmount($amount);
$transaction->setDescription('Compra no Site');

// Definindo as URLs de redirecionamento
$redirectUrls = new RedirectUrls();
$redirectUrls->setReturnUrl($url_completa."sucesso.php?resultado=sucesso&numero_encomenda=" . $_POST["id_produto"])
             ->setCancelUrl($url_completa."cancelado.php?resultado=cancelado&numero_encomenda=" . $_POST["id_produto"]);

// Criando o Pagamento
$payment = new Payment();
$payment->setIntent('sale')
        ->setPayer($payer)
        ->setTransactions([$transaction])
        ->setRedirectUrls($redirectUrls);

try {
    // Executando o Pagamento
    $payment->create($apiContext);
    echo "Pagamento criado com sucesso. Redirecionando para PayPal...";
    // header("Location: " . $payment->getApprovalLink());
    echo "<script>location = '" . $payment->getApprovalLink()  . "'</script>";
    exit();
} catch (Exception $ex) {
    // Em caso de erro
    echo "Erro ao criar pagamento: " . $ex->getMessage();
}

?>
