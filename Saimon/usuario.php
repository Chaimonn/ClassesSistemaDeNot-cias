<?php
  class usuario{

    private $idUsuario;

    private $nome;

    private $email;

    private $senha;

    public function setId($idUsuario){

      $this->idUsuario=$idUsuario;

    }

    public function getId(){

      return $this->idUsuario;

    }

    public function setNome($nome){

      $this->nome=$nome;

    }

    public function setNome(){

      return $this->nome;

    }

    public function setEmail($email){

      $this->email=$email;

    }

    public function getEmail(){

      return $this->email;

    }

    public function setSenha($senha){

      $this->senha=$senha;

    }

    public function getSenha(){

      return $this->senha;

    }

    public function salvar(){}

    public function listar(){

      echo $this->nome;

      echo $this->email;

      echo $this->senha;

    }

    public function info($idUsuario){}
  }
?>
