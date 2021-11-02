<?php

require('inc/fonction.php');
require('brief/data.php');
debug($movies);

include('inc/header.php');

echo '<div id="movies">';
    foreach ($movies as $film) {
        //echo '<p class="movie_title">' . $film['title'] . '</p>';
        echo '<a href="detail.php?id='.$film['id'].'" title="'.$film['title'].'">'.imgMovie($film).'</a>';
    }
echo '</div>';

include('inc/footer.php');