<?php
require_once '../routes/filme.php';
require_once 'filmeDao.php';
require_once '../routes/conexao.php';
use  \filmes\routes\filme;
use  \filmes\core\filmeDao;

$date = new Datetime();
$data = $date->format('dmYHis');
$ext = strtolower(substr($_FILES['imagem']['name'],-4)); //Pegando extensão do arquivo
$new_name = $data.$_POST['titulo']. $ext; //Definindo um novo nome para o arquivo
$dir = '../images/filmes/'; //Diretório para uploads 
move_uploaded_file($_FILES['imagem']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
echo("Imagen enviada com sucesso!");


$filme = filme::getInstance();
$filme->setTitulo($_POST['titulo']);
$filme->setDescricao($_POST['descricao']);
$filme->setImagem($new_name);
$filmeDao = new filmeDao();
$filmeDao->create($filme);
header("location: ..\index.php");

?>