<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

class AppController extends Action {


	public function timeline() {

		$this->validaAutenticacao();
			
		//recuperação dos tweets
		$tweet = Container::getModel('Tweet');

		$tweet->__set('id_usuario', $_SESSION['ID']);

		$tweets = $tweet->getAll();

		$this->view->tweets = $tweets;

		$this->render('timeline');
		
		
	}

	public function tweet() {

		$this->validaAutenticacao();

		$tweet = Container::getModel('Tweet');

		$tweet->__set('tweet', $_POST['tweet']);
		$tweet->__set('id_usuario', $_SESSION['ID']);

		$tweet->salvar();

		header('Location: /timeline');
		
	}

	public function validaAutenticacao() {

		session_start();

		if(!isset($_SESSION['ID']) || $_SESSION['ID'] == '' || !isset($_SESSION['nome']) || $_SESSION['nome'] == '') {
			header('Location: /?login=erro');
		}	

	}
}

?>