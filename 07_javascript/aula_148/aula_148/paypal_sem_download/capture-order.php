<?php
require 'config.php';
header('Content-Type: application/json');

$input = json_decode(file_get_contents('php://input'), true);
$orderID = $input['orderID'] ?? null;
if (!$orderID) { http_response_code(400); echo json_encode(['error'=>'orderID faltando']); exit; }

// Get access token (mesmo método)
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, PAYPAL_BASE . "/v1/oauth2/token");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERPWD, PAYPAL_CLIENT_ID . ":" . PAYPAL_SECRET);
curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
curl_setopt($ch, CURLOPT_HTTPHEADER, ["Accept: application/json", "Accept-Language: en_US"]);
$response = curl_exec($ch);
if ($response === false) { http_response_code(500); echo json_encode(['error'=>'token request failed']); exit; }
$tokenData = json_decode($response, true);
$accessToken = $tokenData['access_token'] ?? null;
curl_close($ch);

if (!$accessToken) { http_response_code(500); echo json_encode(['error'=>'no access token']); exit; }

// Capture
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, PAYPAL_BASE . "/v2/checkout/orders/" . urlencode($orderID) . "/capture");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
  "Content-Type: application/json",
  "Authorization: Bearer " . $accessToken
]);
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

http_response_code($httpCode);
echo $response;
