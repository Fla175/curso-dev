<?php

use Slim\App;
use App\Models\User;
use Firebase\JWT\JWT;
use Slim\Http\Request;
use Slim\Http\Response;
use App\Models\Product;

return function (App $app) {
    $container = $app->getContainer();

    // Rotas para auth (geração de token)
    $app->post('/api/token', function($request, $response) {

        $data = $request->getParsedBody();
        $email = $data['email'] ?? null;
        $password = $data['password'] ?? null;

        $user = User::where('email', $email)->first();

        if (!is_null($user) && (md5($password) === $user->password)) {
            
            // Geração de token
            $secretKey = $this->get('settings')['secretKey'];
            $token = JWT::encode($user, $secretKey);

            return $response->withJson(['token' => $token]);
        }

        return $response->withJson(['status' => 'error']);
    });
};