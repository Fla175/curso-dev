<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    $app->options('/{routes:.+}', function ($request, $response, $args) {
        return $response;
    });

    // Executa a autenticação passando $app
    $auth = require __DIR__ . '/routes/auth.php';
    $auth($app);

    // Executa a função de produtos passando $app
    $products = require __DIR__ . '/routes/products.php';
    $products($app);

    $app->map(['GET', 'POST', 'PUT', 'DELETE', 'PATCH'], '/{routes:.+}', function($req, $res) {
        $handler = $this->notFoundHandler; // handle using the default Slim page not found handler
        return $handler($req, $res);
    });
};
