<?php
include "vendor/autoload.php";
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
$client = new Client();
$headers = [
  'Authorization' => 'Ujx2mOhBQlTEj8Xbg_tYiNatM2WQnFAd',
  'Content-Type' => 'application/json'
];
$body = '{
  "username": "Marcs",
  "password": "0511",
  "real_name": "Marcus Mathew B. Calaguas",
  "email": "calaguas.marcusmathew@auf.edu.ph",
  "access_level": {
    "name": "updater"
  },
  "enabled": false,
  "protected": false
}';
$request = new Request('POST', 'https://ipt10-2022.mantishub.io/api/rest/users/', $headers, $body);
$res = $client->sendAsync($request)->wait();
echo $res->getBody();