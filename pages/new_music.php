<a href="?page=albums" class="btn-voltar"> Voltar </a>

<h1>Cadastrar nova música para álbum <?=$_GET['album']?></h1>

<form action="#" method="post" enctype="multipart/form-data">
  
    <div class="form-group mb-3">
        <input type="file" name="audio" class="form-control">
    </div>  

    <button type="submit" class="btn btn-primary">Cadastrar</button>

</form>

<?php

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $album = $_GET['album'];

    $path = "albums/{$album}/musics/";
    
    if(!is_dir($path)) {
        mkdir($path, 0777, true);
    }

    if (move_uploaded_file($_FILES['audio']['tmp_name'], $path . $_FILES['audio']['name'])) {
        header("Location: ?page=musics&album=" . $_GET['album']);
    } else {
        echo "Erro ao fazer upload";
    }
  
}