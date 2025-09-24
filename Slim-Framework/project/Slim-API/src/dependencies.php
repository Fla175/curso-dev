<?php
use Slim\App;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Illuminate\Database\Capsule\Manager as Capsule;

return function (App $app) {
    $container = $app->getContainer();

    // View renderer
    $container['renderer'] = function ($c) {
        $settings = $c->get('settings')['renderer'];
        return new \Slim\Views\PhpRenderer($settings['template_path']);
    };

    // Monolog
    $container['logger'] = function ($c) {
        $settings = $c->get('settings')['logger'];
        $logger = new Logger($settings['name']);
        $logger->pushProcessor(new \Monolog\Processor\UidProcessor());
        $logger->pushHandler(new StreamHandler($settings['path'], $settings['level']));
        return $logger;
    };

    // Eloquent / Illuminate Database
    $container['db'] = function ($c) {
        $capsule = new Capsule;
        $dbSettings = $c->get('settings')['db'];
        $capsule->addConnection([$dbSettings]);
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
        return $capsule;
    };
};
