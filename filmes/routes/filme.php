<?php
namespace filmes\routes;
class filme {
    private $id, $titulo, $descricao, $imagem;
   
    private static $instance = null;

    public static function getInstance (){
        if (self::$instance == null){
            self::$instance = new filme();
        }
        return self:: $instance;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id=$id;
    }    

    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($titulo){
        $this->titulo=$titulo;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao=$descricao;
    }

    public function getImagem(){
        return $this->imagem;
    }

    public function setImagem($imagem){
        $this->imagem=$imagem;
    }

    public function getAll(){
        return $this->self;
    }

    public function getFilme($id){
        foreach(self as $k=>$v){
        if($v['id'] == $id)
        {
            return $this->self;
        }
    }     
    }
    private function __construct (){}
    private function __clone (){}
    private function __wakeup (){}  
}