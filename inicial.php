<?php
require_once('vendor/autoload.php');

$client = new \GuzzleHttp\Client();

$response = $client->request('POST', 'https://api-gw.payclip.com/checkout', [
  'body' => '{"amount":100.55,"currency":"MXN","purchase_description":"example of a description of purchase","redirection_url":{"success":"https://my-website.com/redirection/success?me_reference_id=OID123456789","error":"https://my-website.com/redirection/error?me_reference_id=OID123456789","default":"https://my-website.com/redirection/default"},"metadata":{"me_reference_id":"OID123456789","customer_info":{"name":"string","email":"string","phone":0}},"billing_address":{"zip_code":"string","locality":"San Pedro","city":"Benito Juárez","State":"Ciudad de México","country":"México","street":"Av Uno","outdoor_number":"string","interior_number":"A203","reference":"Edificio gris","between_streets":"Entre calle 13 y calle 9","floor":"string"},"override_settings":{"enable_tip":false,"currency":{"show_currency_code":false}},"webhook_url":"https://hook.us1.make.com/k5f98kqxuuxgn4td6hgejrnu6lsi362p"}',
  'headers' => [
    'accept' => 'application/vnd.com.payclip.v2+json',
    'content-type' => 'application/json',
  ],
]);

echo $response->getBody();