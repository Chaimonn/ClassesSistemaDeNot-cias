<?php
  include_once "noticia.php";

  class comentario{

    private $idComentario;

    private $comentario;

    private $data;

    public function salvar(){}

    public function excluir(){}

    public function listar($idComentario){}

    public function setId($idComentario){

      $this->idComentario=$idComentario;

    }

    public function getId(){

      return $this->idComentario;

    }

    public function setComentario($comentario){

      $this->comentario=$comentario;

    }

    public function getComentario(){

      return $this->comentario;

    }

    public function setData($data){

      $this->data=$data;

    }

    public function getData(){

      return $this->data;

    }

  }
?>
