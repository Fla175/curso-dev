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
    // Token gerado: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJJRCI6NCwibmFtZSI6Inh1eGEiLCJlbWFpbCI6Inh1eGEubG9jYUBldW1haWwuZ29nby5jb20iLCJwYXNzd29yZCI6IjgyYjAwNmI1NDExMjY3Y2JjMzk2YjU4Y2E2NDBhNzFkIn0.ibiu7u0N1pS1DpWuCdf7_KHi6uly8bjTwD-qCrU-kP8
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