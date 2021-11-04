<?php

require('inc/pdo.php');
require('inc/fonction.php');
require('inc/request.php');

if(!empty($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $movie = getMovieById($id);
    if(empty($movie)) {
        Abort404();
    }
} else {
    Abort404();
}

include('inc/header.php'); ?>

<div class="onemovie">
    <h2><?php echo $movie['title']; ?></h2>
    <p>Année de sortie: <?php echo $movie['year']; ?></p>
    <p>Résumé: <?php echo $movie['plot']; ?></p>
    <p>Réalisateur: <?php echo $movie['directors']; ?></p>
    <p>Durée: <?php echo $movie['runtime']; ?></p>
    <p>Mis sur le site le : <?php echo date('d/m/Y',strtotime($movie['created'])); ?></p>
    <p><a href="update-movie.php?id=<?= $movie['id']; ?>"><i class="fas fa-edit"></i></a></p>

</div>

<?php include('inc/footer.php');
