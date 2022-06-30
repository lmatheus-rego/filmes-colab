<?php 
 require_once 'vendor/autoload.php';
 require "config.php"; 
 require_once 'routes/conexao.php';
 require "core/filmeList.php"; 
 require "pages/includes/header.html"; 
 require "pages/includes/navbar.html";

 ?>
   <div class="row">
      <div class="col-12">
         <h2 style="font-family: Raleway;">Ultimos Filmes Adicionados</h2>
      </div>
   </div>

   <div class="row">
      <div class="col-12">
         <h4>Próximos Filmes</h4>
      </div>
   </div>
   <div class="row">
        <?php
        foreach($filmeList->read() as $poster):
         echo'
         <figure class="container">
            <form method="get" action="pages\detailsfilme.php">
               <input type="hidden" name="idfilme" value="'.$poster["id"].'">
               <img src="images/filmes/'.$poster["imagem"].'" alt=""/>
               <figcaption>
                  <h3 style="font-size: 16px;">'.$poster["titulo"].'</h3>
                  <p>'.$poster["descricao"].'</p><p style="font-size: 18px;">(...)</p><button type="submit" class="more">Mais Detalhes</button>
               </figcaption>
            </form>
         </figure>
         ';
         endforeach;
         ?>
<?php require "pages/includes/footer.html"; ?>
 



    
    