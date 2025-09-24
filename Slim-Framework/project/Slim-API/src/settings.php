<?php
return [
    'settings' => [
        'displayErrorDetails' => true,
        'addContentLengthHeader' => false,

        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        'logger' => [
            'name' => 'slim-app',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            // usar número em vez da constante evita problema de autoload
            'level' => 100, // DEBUG
        ],
        'db' => [
            'driver' => 'mysql',
            'host' => '127.0.0.1',
            'database' => 'slim',
            'username' => 'slimuser',
            'password' => 'senha123',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ],
        // Secret
        'secretKey' => '9470fbbc99e57a26245e2a7c8de7b95803a77461'
    ],
];
