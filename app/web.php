<?php 
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});

$app->get('/foo', function (Request $request, Response $response, $args) {
    $myService = $this->get('template');
    echo 'hola';
    return $response;
});