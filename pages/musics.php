<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<a href="?page=albums" class="btn-voltar"> Voltar</a>
<a href="?page=new_music&album=<?=$_GET['album']?>" class="btn-success"> Adicionar música</a>
<hr>
<?php
$musics = getMusics($_GET['album']); 
?>

<h1>Ouça as músicas de <?=$_GET['album']?></h1>

<?php
foreach ($musics as $music):
    
    $infoMusic = explode('/', $music);
    $nameMusic = $infoMusic[3];
    $nameMusic = str_replace('.mp3', '', $nameMusic);
?>
<hr>
<div  class=music>     

<p class="music-title"><strong>  🎵 Tocando agora: <?=$nameMusic?> <strong> </p>
<br>
<audio src="<?=$music?>" controls> alt="<?=$nameMusic?> </audio>
</div>  

<?php
endforeach;
?>
</body>
</html>