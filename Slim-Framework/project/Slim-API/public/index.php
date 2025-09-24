<?php
if (PHP_SAPI == 'cli-server') {
    // Built-in PHP dev server: serve arquivos estáticos diretamente
    $url  = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];
    if (is_file($file)) {
        return false;
    }
}

// Carrega o Composer autoload **primeiro**
require __DIR__ . '/../vendor/autoload.php';

// Inicia sessão
session_start();

// Configurações (settings.php)
$settings = require __DIR__ . '/../src/settings.php';

// Instancia o App Slim
$app = new \Slim\App($settings);

// Registra dependências (logger, renderer, db, etc.)
$dependencies = require __DIR__ . '/../src/dependencies.php';
$dependencies($app);

// Registra middlewares
$middleware = require __DIR__ . '/../src/middleware.php';
$middleware($app);

// Setando $container
$container = $app->getContainer();

// Dando acesso ao banco de dados para o Eloquent ORM
$db = $container->get('db');

// Registra rotas
$routes = require __DIR__ . '/../src/routes.php';
$routes($app);

// Roda o App
$app->run();
