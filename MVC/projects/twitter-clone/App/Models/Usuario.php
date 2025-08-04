<?php

namespace App\Models;

use MF\Model\Model;

class Usuario extends Model {
    private $id;
    private $nome;
    private $email;
    private $senha;

    public function __get($attr) {
        return $this->$attr;
    }

    public function __set($attr, $val) {
        $this->$attr = $val;
    }


    public function salvar() {
        $query = "INSERT INTO usuarios(nome, email, senha) VALUES(:nome, :email, :senha)";

        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':nome', $this->__get('nome'));
        $stmt->bindValue(':email', $this->__get('email'));
        $stmt->bindValue(':senha', $this->__get('senha'));
        $stmt->execute();

        return $this;

        // $senha = 'minhaSenha123';
        // $hash = password_hash($senha, PASSWORD_BCRYPT, ['cost' => 12]);
        // echo $hash;
    }

    public function validarCadastro() {
        $valido = true;

        if(strlen($this->__get('nome')) < 3) {
            $valido = false;
        }

        if(strlen($this->__get('email')) < 6) {
            $valido = false;
        }

        if(strlen($this->__get('senha')) < 4) {
            $valido = false;
        }

        return $valido;
    }

    public function getUsuarioPorEmail() {
        $query = "SELECT nome, email FROM usuarios WHERE email = :email";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':email', $this->__get('email'));
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function autenticar() {

        $query = "SELECT ID, nome, email FROM usuarios WHERE email = :email AND senha = :senha";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':email', $this->__get('email'));
        $stmt->bindValue(':senha', $this->__get('senha'));
        $stmt->execute();

        $usuario = $stmt->fetch(\PDO::FETCH_ASSOC);

        if ($usuario['ID'] != '' && $usuario['nome'] != '') {
            $this->__set('ID', $usuario['ID']);
            $this->__set('nome', $usuario['nome']);
        }

        return $this;
    }

}


?>