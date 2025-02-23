<link rel="stylesheet" href="style.css">

<a href="?page=new_album" class="btn btn-success">Adicionar novo álbum</a>

<div class="row">
    <?php
        $albums = getAlbums();
        
        foreach($albums as $album):

        $infoAlbum = explode('/', $album);
        $nameAlbum = $infoAlbum[1];
        $imgAlbum = glob("{$album}/*.jpg")[0];
    
    ?>     
    <div class="col-3 album">

        <a href="?page=musics&album=<?=$nameAlbum?>" class="album-link">

            <img src="<?=$imgAlbum?>" alt="<?=$nameAlbum?>" class="img-album">
            <h5><?=$nameAlbum?></h5>
        </a>
    </div>
    <?php
            endforeach;
        ?>
</div>  