<?php

use Psr\Http\Message\ResponseInterface as response;
use Psr\Http\Message\ServerRequestInterface as request;
use Slim\Factory\AppFactory;

require 'vendor/autoload.php';
$app = AppFactory::create();
$app->setBasePath("/tecweb/practicas/p17/prueba_slim");

$app->get('/', function ($request, $response, $args) {
    $response->getBody()->write("Hola mundo Slim!!");
    return $response;
});

$app->run();
