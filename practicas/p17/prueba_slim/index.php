<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require 'vendor/autoload.php';
$app = AppFactory::create();

$app->setBasePath("/tecweb/practicas/p17/prueba_slim");

//activar debug
//$app->addErrorMiddleware(true, true, true);

$app->get('/', function ($request, $response, $args) {
    $response->getBody()->write("Hola mundo Slim!!");
    return $response;
});

$app->get("/hola[/{nombre}]", function ($request, $response, $args) {
    $nombre = $args['nombre'] ?? 'invitado'; // valor por defecto si no se pasa
    $response->getBody()->write("Hola, " . $args["nombre"]);
    return $response;
});
$app->run();
