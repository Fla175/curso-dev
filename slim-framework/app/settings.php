<?php

declare(strict_types=1);

use Monolog\Logger;
use DI\ContainerBuilder;

return function (ContainerBuilder $containerBuilder) {
    $containerBuilder->addDefinitions([
        'settings' => [
            'displayErrorDetails' => true,
            'logError'            => false,
            'logErrorDetails'     => false,
            'db' => [
                'driver' => 'mysql',
                'host' => '127.0.0.1',
                'database' => 'slim',
                // Atualize o usuário
                'username' => 'dev_user',
                // Atualize a senha
                'password' => 'dev_password',
                'charset' => 'utf8mb4',
                'collation' => 'utf8mb4_unicode_ci',
                'prefix' => '',
                'strict' => false,
            ]
        ],
    ]);
};