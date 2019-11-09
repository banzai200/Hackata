<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client();

$test = $client->get('https://viacep.com.br/ws/01138000/json/');

$test = $test->getBody()->getContents();

$array = json_decode($test)->toArray();

var_dump($array);
?>