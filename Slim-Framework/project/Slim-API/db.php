<?php
// Section configurações
if (PHP_SAPI != 'cli') {
    exit('Rodar via CLI');
}

// Carrega o Composer autoload primeiro
require __DIR__ . '/vendor/autoload.php';

// Configurações (settings.php)
$settings = require __DIR__ . '/src/settings.php';

// Instancia o App Slim
$app = new \Slim\App($settings);

// Registra dependências (logger, renderer, db, etc.)
$dependencies = require __DIR__ . '/src/dependencies.php';
$dependencies($app);

// Pega o container
$container = $app->getContainer();

// nome da tabela a ser criada
$tableCreate = 'products';

// Atalhos
$db = $container->get('db');
$schema = $db->schema();
$table = $db->table($tableCreate);

// ---------------------------------

// Section produção

// Configuração de criação da tabela
$schema->dropIfExists($tableCreate);

// Criando a tabela products
$schema->create($tableCreate, function($table) {
    $table->increments('id');
    $table->string('title', 100);
    $table->text('description');
    $table->decimal('price', 11, 2);
    $table->string('fabricant', 100);
    $table->timestamps();
});

// Preenchendo a tabela products
$table->insert([
    'title' => 'Smartphone Motorola Moto G6 32GB Dual Chip',
    'description' => 'Android 8.0 Tela 5.7" Octa-Core 1.8GHz 4G Câmera 12 + 5MP (Dual Traseira) - Índigo',
    'price' => 899.00,
    'fabricant' => 'Motorola',
    'created_at' => '2019-10-22',
    'updated_at' => '2019-10-22',
]);

$table->insert([
    'title' => 'iPhone X Cinza Espacial 64GB',
    'description' => 'IOS 12 Tela 5.8" 4G Wi-Fi Câmera 12MP',
    'price' => 4999.00,
    'fabricant' => 'Apple',
    'created_at' => '2020-01-10',
    'updated_at' => '2020-01-10',
]);

// ---------------------------------
