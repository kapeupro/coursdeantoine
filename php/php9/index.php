<?php

require('inc/fonction.php');
require('brief/data.php');
debug($movies);

include('inc/header.php');

echo '<div id="movies">';
    foreach ($movies as $film) {
        //echo '<p class="movie_title">' . $film['title'] . '</p>';
        echo '<a href="#" title="'.$film['title'].'"><img src="https://formation.weblitzer.fr/posters/'.$film['id'].'.jpg" alt="'.$film['title'].'"></a>';
    }
echo '</div>';

include('inc/footer.php');