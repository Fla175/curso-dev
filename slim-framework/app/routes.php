<?php

declare(strict_types=1);

// ... (seus 'use' statements aqui)
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;

return function (App $app) {

    // Rota GET para listar postagens (já existe)
    $app->get('/postagens', function(Request $request, Response $response) {
        $response->getBody()->write("Lista de Postagens");
        return $response;
    });

    // Rota POST para criar uma nova postagem (A ROTA QUE ESTAVA FALTANDO)
    $app->post('/postagens', function(Request $request, Response $response) {
        // Obtenha os dados do corpo da requisição (JSON)
        $dados = $request->getParsedBody();
        
        // Verifique se os dados existem e não estão vazios
        if (!empty($dados)) {
            $response->getBody()->write("Dados recebidos (JSON): " . json_encode($dados, JSON_PRETTY_PRINT));
        } else {
            $response->getBody()->write("Nenhum dado recebido na requisição POST.");
        }
        
        return $response;
    });
};