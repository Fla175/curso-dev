<?php

declare(strict_types=1);

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Illuminate\Database\Capsule\Manager as Capsule;

return function (App $app) {

    // Acessa o contêiner de injeção de dependência.
    $container = $app->getContainer();

    // Cria a tabela "usuarios" no bd
    $app->get('/usuarios', function (Request $request, Response $response) use ($container) {
        
        // Acessa a instância do Eloquent do contêiner.
        $db = $container->get(Capsule::class);

        $schema_usuarios = $db->schema();

        // Lógica da criação da tabela ("->schema()" serve justamente para criar ou dropar tabelas, databases, entre outros).
        $schema_usuarios->dropIfExists('usuarios');
        $schema_usuarios->create('usuarios', function ($table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('email');
            $table->timestamps();
        });

        $response->getBody()->write('Tabela de usuários criada com sucesso!<br><br><br><br><br> // Erro de Deprecated (Relaxa, ele late, mas não morde)<br>');
        return $response;

    });

    // Insere um usuário na tabela "usuarios"
    $app->get('/insert', function (Request $request, Response $response) use ($container) {
        
        // Acessa a instância do Eloquent do contêiner.
        $db = $container->get(Capsule::class);

        $table_usuarios = $db->table('usuarios');

        // Lógica para inserção de dados na tabela (para casos de inserção de dados, é utilizado "->table('tabela selecionada')->insert([
            // 'exemplo1' => 'valor1',
            // 'exemplo2' => 'valor2',
            // etc...
        // ]);").
        $table_usuarios->insert([
            'nome' => 'otto de exemplo',
            'email' => 'exampleotto@maisexample.com'
        ]);

        $response->getBody()->write('Usuários inseridos com sucesso!<br><br><br><br><br> // Erro de Deprecated (Relaxa, ele late, mas não morde)<br>');
        return $response;

    });

    // Atualiza os dados de um usuário na tabela "usuarios"
    $app->get('/update', function (Request $request, Response $response) use ($container) {
        
        // Acessa a instância do Eloquent do contêiner.
        $db = $container->get(Capsule::class);

        $table_usuarios = $db->table('usuarios');

        // Lógica para atualização de dados na tabela (para casos de atualização de dados, é utilizado "->table('tabela-selecionada')->where('example', 'qualquer-valor')->update([
            // 'exemplo1' => 'outro-valor1',
            // 'exemplo2' => 'outro-valor2',
            // etc...
        // ]);").
        $table_usuarios->where('id', 1)->update([
            'nome' => 'Flavio',
            'email' => 'floabrio.exempfro@firsti.exemplo.com.net'
        ]);

        $response->getBody()->write('Usuários atualizados com sucesso!<br><br><br><br><br> // Erro de Deprecated (Relaxa, ele late, mas não morde)<br>');
        return $response;

    });

    // Deleta os dados de um usuário na tabela "usuarios"
    $app->get('/delete', function (Request $request, Response $response) use ($container) {
        
        // Acessa a instância do Eloquent do contêiner.
        $db = $container->get(Capsule::class);

        $table_usuarios = $db->table('usuarios');

        // Lógica para remoção de dados na tabela (para casos de remoção de dados, é utilizado "->table('tabela-selecionada')->where('example', 'qualquer-valor')->delete();").
        $table_usuarios->where('id', 3)->delete();

        $response->getBody()->write('Usuários removidos com sucesso!<br><br><br><br><br> // Erro de Deprecated (Relaxa, ele late, mas não morde)<br>');
        return $response;

    });

    // Lista os dados de um usuário na tabela "usuarios"
    $app->get('/list', function (Request $request, Response $response) use ($container) {
        
        // Acessa a instância do Eloquent do contêiner.
        $db = $container->get(Capsule::class);

        // Lógica para listagem de dados na tabela (para casos de listagem de dados, é utilizado "->table('tabela-selecionada')->get();").
        $usuarios = $db->table('usuarios')->get();

        foreach ($usuarios as $usuario) {
            echo 'ID: ' . $usuario->id . '<br>';
            echo 'Nome: ' . $usuario->nome . '<br>';
            echo 'E-Mail: ' . $usuario->email . '<br><br><br>';
        };

        $response->getBody()->write('Usuários listados com sucesso!<br><br><hr><br><br> // Erro de Deprecated (Relaxa, ele late, mas não morde)<br>');
        return $response;

    });
};


// Tipos de respostas:
// ----------------------
// 1. Header (Cabeçalho);
// 2. Text;
// 3. JSON;
// 4. XML;

// // Header:
// $app->get('/header', function (Request $request, Response $response) {

// $response->getBody()->write('Esse é um retorno header, mas não é este texto.');

// return $response->withHeader('allow', 'PUT')->withAddedHeader('Content-Length', 57);

// });


// // Texto:

// $app->get('/text', function (Request $request, Response $response) {

// $response->getBody()->write('Esse é um retorno de texto.');

// return $response;

// });


// // JSON:

// $app->get('/json', function (Request $request, Response $response) {

// // 1. Defina os dados que você quer retornar

// $data = [

// 'nome' => 'FLávio Freires Pomin',

// 'idade' => 12

// ];


// // 2. Converta o array para uma string JSON

// $payload = json_encode($data);


// // 3. Adicione o cabeçalho Content-Type e escreva o JSON na resposta

// $response->getBody()->write($payload);


// return $response->withHeader('Content-Type', 'application/json');

// });


// // XML:

// $app->get('/xml', function (Request $request, Response $response) {

// $xml = file_get_contents(__DIR__ . '/../data/arquivo.xml');

// $response->getBody()->write($xml);

// return $response;

// });


// Middleware:

// $app->add(function (Request $request, RequestHandlerInterface $handler) : Response {

// // Escreve algo na resposta antes da ação principal

// $response = $handler->handle($request);


// // Acessa o corpo da resposta e o modifica

// $body = (string) $response->getBody();

// $response->getBody()->rewind();

// $response->getBody()->write('Início da camada 1 + ' . $body . ' + Fim da camada 1');


// // Retorna a resposta

// return $response;

// });


// $app->add(function (Request $request, RequestHandlerInterface $handler) : Response { // Corrigido aqui

// // Escreve algo na resposta antes da ação principal

// $response = $handler->handle($request);


// // Acessa o corpo da resposta e o modifica

// $body = (string) $response->getBody();

// $response->getBody()->rewind();

// $response->getBody()->write('Início da camada 2 + ' . $body . ' + Fim da camada 2');


// // Retorna a resposta

// return $response;

// });


// $app->get('/usuarios', function (Request $request, Response $response) {

// $response->getBody()->write('Ação Principal: Lista de Usuários');

// return $response;

// });


// $app->get('/postagens', function (Request $request, Response $response) {

// $response->getBody()->write('Ação Principal: Lista de Postagens');

// return $response;

// });