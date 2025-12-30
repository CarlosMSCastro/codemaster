<?php

require 'vendor/autoload.php';

use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;

$clientId = "???";
$clientSecret = "???";

$apiContext = new ApiContext(
    new OAuthTokenCredential($clientId, $clientSecret)
);

$apiContext->setConfig([
    'mode' => 'sandbox',
]);

if (isset($_GET['paymentId']) && isset($_GET['PayerID'])) {
    $paymentId = $_GET['paymentId'];
    $payerId = $_GET['PayerID'];

    $payment = Payment::get($paymentId, $apiContext);

    $execution = new PaymentExecution();
    $execution->setPayerId($payerId);

    try {
        $result = $payment->execute($execution, $apiContext);
        echo "Pagamento realizado com sucesso!";
        // header("location: " . getURLBase("area_cliente?resultado=sucesso&numero_encomenda=" . $_GET["numero_encomenda"]));
        echo "<script>location = 'fim.php'</script>";
    } catch (Exception $ex) {
        echo "Erro ao processar pagamento: " . $ex->getMessage();
    }
} else {
    echo "Pagamento cancelado.";
}

?>