<?php

declare(strict_types=1);

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;

return function (App $app) {

    $app->get('/postagens', function(Request $request, Response $response) {
        $response->getBody()->write("Lista de Postagens");
        return $response;
    });

    $app->post('/postagens', function(Request $request, Response $response) {
        $dados = $request->getParsedBody();

        if (!empty($dados)) {
            $response->getBody()->write("Dados recebidos (JSON): " . json_encode($dados, JSON_PRETTY_PRINT));
        } else {
            $response->getBody()->write("Nenhum dado recebido na requisição POST.");
        }
        
        return $response;
    });

    // método curl para a rota /usuarios/adiciona: curl -X POST -H "Content-Type: application/json" -d '{"id": 1, "nome": "Flavio", "email": "flavio@exemplo.com"}' http://10.20.31.152:8080/proxy/5040/usuarios/adiciona

    $app->post('/usuarios/adiciona', function(Request $request, Response $response) {

        $post = $request->getParsedBody();
        $id = $post['id'];
        $nome = $post['nome'];
        $email = $post['email'];

        $response->getBody()->write("Sucesso ao adicionar" . "                                                                             ");
        return $response;
    });

    // método curl para a rota /usuarios/atualiza: curl -X PUT -H "Content-Type: application/json" -d '{"id": 1, "nome": "Flavio Atualizado", "email": "flavio.novo@exemplo.com"}' http://10.20.31.152:8080/proxy/5040/usuarios/atualiza/1

    $app->put('/usuarios/atualiza/{id}', function(Request $request, Response $response) {

        $post = $request->getParsedBody();
        $id = $post['id'];
        $nome = $post['nome'];
        $email = $post['email'];

        $response->getBody()->write("Sucesso ao atualizar: " . $id . "                                                                          ");
        return $response;
    });

    // método curl para a rota /usuarios/remove: curl -X DELETE http://10.20.31.152:8080/proxy/5040/usuarios/remove/1

    $app->delete('/usuarios/remove/{id}', function(Request $request, Response $response) {
        $id = $request->getAttribute('id');

        $response->getBody()->write("Sucesso ao remover: " . $id . "                                                                            ");
        return $response;
    });

};

