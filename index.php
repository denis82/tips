<?php
      require_once __DIR__ . '/vendor/autoload.php';
      
      use GuzzleHttp\Client as Client;
      
      $httpClient = new Client(['base_uri' => 'http://vk.com']);
      //$response = $httpClient->request('GET');
     
      $res = $httpClient->request('GET', '/redirect');
echo $res->getStatusCode();
     // echo "<pre>";print_r($response->getHeaders());echo "</pre>";
