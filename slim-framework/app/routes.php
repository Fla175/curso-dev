<?php
declare(strict_types=1);

use App\Application\Settings\SettingsInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface;
use Slim\App;
use Slim\Views\Twig;
use MyApp\View;

return function (App $app) {

    // Tipos de respostas:
    // 1. Header (Cabeçalho); 2. Texto; 3. JSON; 4. XML

    // Header:
    $app->get('/header', function (Request $request, Response $response) {
        $response->getBody()->write('Esse é um retorno header, mas não é este texto.');
        return $response->withHeader('allow', 'PUT')->withAddedHeader('Content-Length', 57);
    });

    // Texto:
    $app->get('/text', function (Request $request, Response $response) {
        $response->getBody()->write('Esse é um retorno de texto.');
        return $response;
    });

    // JSON:
    $app->get('/json', function (Request $request, Response $response) {
        // 1. Defina os dados que você quer retornar
        $data = [
            'nome' => 'FLávio Freires Pomin',
            'idade' => 12
        ];

        // 2. Converta o array para uma string JSON
        $payload = json_encode($data);

        // 3. Adicione o cabeçalho Content-Type e escreva o JSON na resposta
        $response->getBody()->write($payload);

        return $response->withHeader('Content-Type', 'application/json');
    });

    // XML:
    $app->get('/xml', function (Request $request, Response $response) {
        $xml = file_get_contents(__DIR__ . '/../data/arquivo.xml');
        $response->getBody()->write($xml);
        return $response;
    });

};

    // Middleware:
//     $app->add(function (Request $request, RequestHandlerInterface $handler) : Response {
//         // Escreve algo na resposta antes da ação principal
//         $response = $handler->handle($request);

//         // Acessa o corpo da resposta e o modifica
//         $body = (string) $response->getBody();
//         $response->getBody()->rewind();
//         $response->getBody()->write('Início da camada 1 + ' . $body . ' + Fim da camada 1');

//         // Retorna a resposta
//         return $response;
//     });

//     $app->add(function (Request $request, RequestHandlerInterface $handler) : Response { // Corrigido aqui
//         // Escreve algo na resposta antes da ação principal
//         $response = $handler->handle($request);

//         // Acessa o corpo da resposta e o modifica
//         $body = (string) $response->getBody();
//         $response->getBody()->rewind();
//         $response->getBody()->write('Início da camada 2 + ' . $body . ' + Fim da camada 2');

//         // Retorna a resposta
//         return $response;
//     });

//     $app->get('/usuarios', function (Request $request, Response $response) {
//         $response->getBody()->write('Ação Principal: Lista de Usuários');
//         return $response;
//     });

//     $app->get('/postagens', function (Request $request, Response $response) {
//         $response->getBody()->write('Ação Principal: Lista de Postagens');
//         return $response;
//     });
