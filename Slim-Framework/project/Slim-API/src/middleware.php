<?php

use Slim\App;
// Use para container

return function (App $app) {
    $container = $app->getContainer();

    // Autenticação com JWT
    $app->add(new Tuupola\Middleware\JwtAuthentication([
        "regexp" => "/(.*)/",
        "path" => "/api",
        "ignore" => "/api/token",
        "secret" => $container->get('settings')['secretKey'],
        "secure" => false
    ]));

    // e.g: $app->add(new \Slim\Csrf\Guard);
    $app->add(function ($req, $res, $next) {
        $response = $next($req, $res);
        return $response
                ->withHeader('Access-Control-Allow-Origin', '*')
                ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
                ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
    });
};
