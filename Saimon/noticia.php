<?php
  class noticia{

    private $idNoticia;

    private $titulo;

    private $descricao;

    private $data;

    private $comentarios;

    private $imagem;

    public function salvar(){}

    public function excluir($idNoticia){}

    public function listar(){}

    public function setComentarios($comentarios){

        $this->comentarios=$comentarios;

    }

    public function getComentarios(){

        return $this->comentarios;

    }
    public function setId($idNoticia){

        $this->idNoticia=$idNoticia;

    }

    public function getId(){

        return $this->idNoticia;

    }

    public function setTitulo($titulo){

        $this->titulo=$titulo;

    }

    public function getTitulo(){

        return $this->titulo;

    }

    public function setDescricao($descricao){

        $this->descricao=$descricao;

    }

    public function getDescricao(){

        return $this->descricao;

    }

    public function setData($data){

        $this->data=$data;

    }

    public function getData(){

        return $this->data;

    }

    public function setImagem($imagem){

        $this->imagem=$imagem;

    }

    public function getImagem(){

        return $this->imagem;

    }

  }
?>
