<?php 
 
 require "../config.php"; 
 require "includes/header.html"; 
 require_once '../routes/conexao.php';
 require "includes/navbar.html"; 
 require "../core/filmeDao.php";
 use  \filmes\core\filmeDao;
$filmeD = new filmeDao();
$filmeD=$filmeD->read();

 ?>
    <div class="row">
        <div class="col-11">
            <h2>Detalhes do Filme</h2>
        </div>
    </div>

<?php

foreach($filmeD as $movie):
    if($movie["id"] == $_GET['idfilme']){

    echo'
        <div class="row">
            <div class="col-10">
                <div class="card row">
                    <div class="card_left">
                        <img src="../images/filmes/'.$movie["imagem"].'"/>
                    </div>
                    <div class="card_right">
                        <h1> '.$movie["titulo"].'</h1>
                        <div class="card_right__details">
                        <div class="card_right__review">
                            <p style="font-size: 18px; max-width: 50ch; line-height: 1.5em; margin-top:30px; text-align: justify;"> '.$movie["descricao"].'</p>
                        </div>
                        <div class="card_right__button">
                            <a href="../index.php"> << Voltar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ';
}
endforeach;
    ?>

    
   






   
   





<?php require "includes/footer.html"; ?>