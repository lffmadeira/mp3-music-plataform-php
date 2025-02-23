<?php

function getAlbums() {
    $albums = glob('albums/*');
    
    return $albums;
}

function getMusics($album) {
    $musics = glob("albums/{$album}/musics/*.mp3");
    
    return $musics;
}

