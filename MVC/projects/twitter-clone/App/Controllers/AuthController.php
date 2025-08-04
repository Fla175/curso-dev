<?php

namespace App\Controllers;

// Os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

class AuthController extends Action {
    public function autenticar() {
        
        $usuario = Container::getModel('Usuario');

        $usuario->__set('email', $_POST['email']);
        $usuario->__set('senha', $_POST['senha']);

        $usuario->autenticar();

        if(!empty($usuario->__get('ID')) && !empty($usuario->__get('nome'))) {

            session_start();

            $_SESSION['ID'] = $usuario->__get('ID');
            $_SESSION['nome'] = $usuario->__get('nome');

            header('Location: /timeline');

        } else {
            header('Location: /?login=error');
        }
    }

}