<?php
namespace filmes\core;
use  \filmes\routes\conexao;
use  \filmes\routes\filme;

class filmeDao{
    public function create(filme $f){
        $sql="INSERT INTO filme (titulo, descricao, imagem) VALUES (?,?,?)";
        try {
        $con = conexao::getInstance();
        $stmt = $con->prepare($sql);
        $stmt->bindValue(1, $f->getTitulo());
        $stmt->bindValue(2, $f->getDescricao());
        $stmt->bindValue(3, $f->getImagem());
        $stmt->execute();     
        }
        catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function read(){
        $sql="SELECT * FROM filme ORDER BY id DESC";
     
        $con = conexao::getInstance();
        $stmt = $con->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0):
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        endif;
    }

    public function get($id){
        $sql="SELECT * FROM filme WHERE id=";
     
        $con = conexao::getInstance();
        $stmt = $con->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
            $resultadod = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultadod;
    }


    public function update(filme $f){

    }

    public function delete($id){

    }
}
