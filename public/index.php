<?php

declare(strict_types=1);

use Slim\Factory\AppFactory;
use DI\ContainerBuilder;

require '../vendor/autoload.php';

// Set up a container for dependency injection
$containerBuilder = new ContainerBuilder();
$container = $containerBuilder->build();

AppFactory::setContainer($container);
$app = AppFactory::create();

// Use the configured routes file to define routing
$routes = require __DIR__ . '/../config/routes.php';
$routes($app);

// Run the application
$app->run();
