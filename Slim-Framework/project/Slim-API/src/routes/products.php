<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;
use App\Models\Product;

return function (App $app) {
    $container = $app->getContainer();

    // Rotas para Produtos
    $app->group('/api/v1', function() {

        // Lista os produtos
        $this->get('/products/list', function($request, $response) {
            
            $products = Product::get();
            return $response->withJson($products);
        });

        // Adiciona um produto
        $this->post('/products/add', function($request, $response) {
            
            // Validação dos dados

            $data = $request->getParsedBody();
            $product = Product::create($data);
            return $response->withJson($product);
        });

        // Recupera um produto para determinado ID
        $this->get('/products/list/{id}', function($request, $response, $args) {
            
            $product = Product::findOrFail($args['id']);
            return $response->withJson($product);
        });

        // Atualiza um produto para determinado ID
        $this->put('/products/atualiza/{id}', function($request, $response, $args) {
            
            $data = $request->getParsedBody();
            $product = Product::findOrFail($args['id']);
            $product->update($data);
            return $response->withJson($product);
        });


        // Remove um produto para determinado ID
        $this->delete('/products/remove/{id}', function($request, $response, $args) {
            
            $product = Product::findOrFail($args['id']);
            $product->delete();
            return $response->withJson($product);
        });
    });
};
