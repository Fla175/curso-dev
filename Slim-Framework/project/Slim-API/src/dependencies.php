<?php

use Slim\App;
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => '127.0.0.1',
    'database'  => 'slim',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Tornar o Capsule disponível globalmente via static methods
$capsule->setAsGlobal();

// Inicializar o Eloquent ORM
$capsule->bootEloquent();
