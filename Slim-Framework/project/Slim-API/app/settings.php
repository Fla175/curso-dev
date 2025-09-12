<?php

declare(strict_types=1);

use Monolog\Logger;
use DI\ContainerBuilder;

return function (ContainerBuilder $containerBuilder) {
    // Configurações Globais
    $containerBuilder->addDefinitions([
        'settings' => [
            'displayErrorDetails' => true, // Should be set to false in production
            'logError'            => false,
            'logErrorDetails'     => false,
            'logger' => [
                'name' => 'slim-app',
                'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
                'level' => Logger::DEBUG,
            ],
            // Configurações do banco de dados
            'db' => [
                'driver' => 'mysql',
                'host' => '127.0.0.1',
                'database' => 'slim',
                'username' => 'root',
                'password' => '',
                'charset' => 'utf8mb4',
                'collation' => 'utf8mb4_unicode_ci'
            ],
        ]
    ]);
};