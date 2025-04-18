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


//paso de parametros
$app->get("/hola[/{nombre}]", function ($request, $response, $args) {
    $nombre = $args['nombre'] ?? 'invitado'; // valor por defecto si no se pasa
    $response->getBody()->write("Hola, " . $args["nombre"]);
    return $response;
});


//Post
$app->post("/pruebapost", function ($request, $response, $args) {
    $reqPost = $request->getParsedBody();
    $val1 = $reqPost["val1"];
    $val2 = $reqPost["val2"];

    $response->getBody()->write("Valores:" . $val1 . " " . $val2);
    return $response;
});

$app->get("/testjson", function ($request, $response, $args) {
    $data[0]["nombre"] = "Sergio";
    $data[0]["apellido"] = "Juarez Perez";
    $data[1]["nombre"] = "Liseth";
    $data[1]["apellido"] = "Mecatl Toxcoyoa";
    $response->getBody()->write(json_encode($data, JSON_PRETTY_PRINT));
    return $response;
});
$app->run();
