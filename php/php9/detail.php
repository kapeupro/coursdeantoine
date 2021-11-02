<?php
require('inc/fonction.php');
require('brief/data.php');

// debug($movies);

if(!empty($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    // WARNING, NE PAS UTILISER CECI DANS LES PROCHAINS EXOS
        // NOUS FERONS DES REQUEST A LA BDD A LA PLACE. !!!!!
    foreach($movies as $key => $film) {
        if($id === $film['id']) {
            $currentMovie = $film;
            $currentKey = $key;
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

    echo '<a href="index.php">Back</a>';

    echo '<h2>' . $currentMovie['title'] . '</h2>';
    echo imgMovie($currentMovie);
    echo '<p>Année: ' . $currentMovie['year'] . '</p>';
    echo '<p>Réal: ' . $currentMovie['directors'] . '</p>';
    echo '<p>Note: ' . $currentMovie['rating'] . '</p>';
    echo '<p>Imdb: ' . $currentMovie['imdb_id'] . '</p>';

    // $currentKey
    echo '<ul>';
        $keyPrecedent = $currentKey - 1;
        if($currentKey > 0) {
            echo '<li><a href="detail.php?id='.$movies[$keyPrecedent]['id'].'">Précédent</a></li>';
        }
        $keySuivant = $currentKey + 1;
        if($currentKey < count($movies) - 1) { ?>
            <li><a href="detail.php?id=<?php echo $movies[$keySuivant]['id']; ?>">Suivant</a></li>
        <?php }
    echo '</ul>';

include('inc/footer.php');