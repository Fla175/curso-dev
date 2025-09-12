<?php

declare(strict_types=1);

use App\Application\Settings\SettingsInterface;
use App\Application\Settings\Settings;
use Psr\Container\ContainerInterface;
use Illuminate\Database\Capsule\Manager as Capsule;
use DI\ContainerBuilder;

return function (ContainerBuilder $containerBuilder) {
    // Mapeia a interface para a classe concreta de configurações
    $containerBuilder->addDefinitions([
        SettingsInterface::class => function (ContainerInterface $c) {
            // A chave 'settings' já foi adicionada pelo arquivo settings.php
            return new Settings($c->get('settings'));
        },
    ]);

    // Mapeia a classe `Capsule` para a instância que você cria.
    $containerBuilder->addDefinitions([
        Capsule::class => function (ContainerInterface $c) {
            $settings = $c->get(SettingsInterface::class);
            $dbSettings = $settings->get('db');

            $capsule = new Capsule;
            $capsule->addConnection($dbSettings);
            $capsule->setAsGlobal();
            $capsule->bootEloquent();

            return $capsule;
        },
    ]);
};