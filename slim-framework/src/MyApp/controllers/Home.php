<?php
namespace MyApp\controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Container\ContainerInterface;
use MyApp\View;

class Home
{
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function index(Request $request, Response $response)
    {
        // 1. Obtenha a instância da View
        $view = $this->container->get(View::class);
        
        // 2. Chame o método render() para obter o conteúdo como string
        $htmlContent = $view->render();
        
        // 3. Passe a string para o método write()
        $response->getBody()->write($htmlContent);
        
        return $response;
    }
}