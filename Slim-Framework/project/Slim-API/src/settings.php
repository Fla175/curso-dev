<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // Sete para false em um ambiente de produção

        'addContentLengthHeader' => false, // Permite que o web server mande o header de quantos caractéres foram enviados (Content-Length)

        // Configurações de renderização
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Configurações de Monolog
        'logger' => [
            'name' => 'slim-app',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
    ],
];
