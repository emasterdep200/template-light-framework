<?php
use DI\Container;
use Slim\Factory\AppFactory;

$container = new Container();
AppFactory::setContainer($container);
$app = AppFactory::create();

$container->set('template', function ($c) {
    return new League\Plates\Engine(__DIR__ . '/../Views');
});
