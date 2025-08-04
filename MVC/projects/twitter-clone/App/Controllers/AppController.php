<?php

namespace App\Controllers;

// Os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

class AppController extends Action {
    
    public function timeline() {
        session_start();

        if ($_SESSION['ID'] != '' && $_SESSION['nome'] != '') {
            echo '<pre>';
            print_r($_SESSION);
            echo '</pre>';

        } else {
            header('Location: /?login=error');
        }

        $this->render('timeline');
    }
}