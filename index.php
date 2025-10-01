<?php
require 'vendor/autoload.php'; // Inclure l'autoload de Composer
use GuzzleHttp\Client;
$client = new Client();
$response = $client->request('GET', 'https://jsonplaceholder.typicode.com/posts/1');
echo $response->getBody();
