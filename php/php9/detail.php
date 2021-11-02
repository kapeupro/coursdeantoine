<?php
require('inc/fonction.php');
require('brief/data.php');

if(!empty($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    // WARNING, NE PAS UTILISER CECI DANS LES PROCHAINS EXOS
        // NOUS FERONS DES REQUEST A LA BDD A LA PLACE. !!!!!
    foreach($movies as $film) {
        if($id === $film['id']) {
            $currentMovie = $film;
        }
    }
    //debug($currentMovie);
    if(empty($currentMovie)) {
        die('404');
    }
} else {
    die('404');
}

include('inc/header.php');

    echo '<h2>'.$currentMovie['title'].'</h2>';
    echo imgMovie($currentMovie);
    echo '<p>Année: '.$currentMovie['year'] . '</p>';
    echo '<p>Réal: '.$currentMovie['directors'] . '</p>';
    echo '<p>Note: '.$currentMovie['rating'] . '</p>';
    echo '<p>Imdb: '.$currentMovie['imdb_id'] . '</p>';

include('inc/footer.php');