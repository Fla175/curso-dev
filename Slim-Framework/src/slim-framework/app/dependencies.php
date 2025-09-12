<?php

declare(strict_types=1);

use DI\ContainerBuilder;
use Psr\Container\ContainerInterface;
use Illuminate\Database\Capsule\Manager as Capsule;
use App\Application\Settings\SettingsInterface;
use App\Application\Settings\Settings;

return function (ContainerBuilder $containerBuilder) {
    // Mapeia a interface para a classe concreta de configurações
    $containerBuilder->addDefinitions([
        SettingsInterface::class => function (ContainerInterface $c) {
            return new Settings($c->get('settings'));
        },
    ]);

    // O ponto crucial: mapeia a classe `Capsule` para a instância que você cria.
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