<?php
use DI\Container;
use Slim\Factory\AppFactory;

$container = new Container();

// Set container to create App with on AppFactory
AppFactory::setContainer($container);

$container->set('template', function () {
    $settings = 'hole';
    return new League\Plates\Engine(__DIR__ . '/../app/Views');
});
