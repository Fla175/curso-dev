<?php

class Conexao {

	private $host = 'localhost';
	private $dbname = 'pdo';
	private $user = 'root';
	private $pass = 'jesusEbom';

	public function conectar() {
		try {

			$conexao = new PDO(
				"mariadb:host=$this->host;dbname=$this->dbname",
				"$this->user",
				"$this->pass"				
			);

			return $conexao;


		} catch (PDOException $e) {
			echo '<p>'.$e->getMessage().'</p>';
		}
	}
}

?>