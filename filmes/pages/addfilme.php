<?php 
 
 require "../config.php"; 
 require_once '../routes/conexao.php';
 require "includes/header.html"; 
 require "includes/navbar.html"; 
 ?>
<h2>Adicionar Novo Filme</h2>
<form method="post" id="cadastro" action="..\core\filmeInsert.php" enctype="multipart/form-data">
    <div class ="row">
        <div class="col-4">
            <!-- titulo input -->
            <div class="form-outline mb-4"> 
                <label class="form-label" for="form4Example1">Título</label>
                <input type="text" oninput="this.value = this.value.toUpperCase()" id="form4Example1" class="form-control text-transform:uppercase" name="titulo" style=" margin: 2px;" required />
            </div>
            <!-- sinopse input -->
            <div class="form-outline mb-5"> 
                <label class="form-label" for="form4Example3">Sinopse</label>
                <textarea class="form-control" id="form4Example3" rows="4" name="descricao" required></textarea>
            </div>
            <!-- Submit button -->
            <div class="form-outline mb-4">
                <button type="submit" class="btn btn-primary btn-block mb-4">Enviar</button>
                <a href="../index.php">
                    <input type="button" class=" btn btn-danger btn-block mb-4" value="Cancelar">
                </a>    
            </div>
        </div>
            <!-- imagem input -->
        <div class="col-5">
            <div class="form-outline mb-4">
                <img id="output" src="" width="180" height="250"><br><br>
                <input required class="btn btn-mdb-color btn-rounded float-left" name="imagem" type="file" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
            </div>
        </div>
    </div>
</form>
<?php require "includes/footer.html"; ?>