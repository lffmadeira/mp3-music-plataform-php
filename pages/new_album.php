<a href="?page=albums" class="btn-voltar"> Voltar </a>

<h1>Cadastrar novo álbum</h1>

<form action="#" method="post" enctype="multipart/form-data">
    <div class="form-group mb-3 ">
        <input type="text" name="name" placeholder="Nome do álbum" class="form-control">
    </div>  

    <div class="form-group mb-3">
        <input type="file" name="image" class="form-control">
    </div>  

    <button type="submit" class="btn btn-primary">Cadastrar</button>

</form>

<?php   

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nameAlbum = $_POST['name'];

    $path = "albums/{$nameAlbum}";

    if(!is_dir($path)) {
        mkdir($path);
    }

    $file = $_FILES['image'];
    $fileInfo = explode('.', $file['name']);

    $extension = $fileInfo[1];
    $nameImage = $_POST['name'] . '.' . $extension;

    if (move_uploaded_file($file['tmp_name'], $path . '/' . $nameImage)) {
        header('Location: ?page=albums');
    } else {
        echo "Erro ao fazer upload";
    }

}