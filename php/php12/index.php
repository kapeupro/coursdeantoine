<?php
require('inc/pdo.php');
require('inc/fonction.php');
require('inc/request.php');

$movies = getMovies(24);
//debug($movies);

include('inc/header.php'); ?>
<div id="movies">
    <?php foreach ($movies as $movie) { ?>
        <div class="movie">
            <a class="title" href="single-movie.php?id=<?= $movie['id']; ?>">
                <?php echo $movie['title']; ?>
            </a>
            <ul>
                <li><a href="single-movie.php?id=<?= $movie['id']; ?>"><i class="fas fa-eye"></i></a></li>
                <li><a href="update-movie.php?id=<?= $movie['id']; ?>"><i class="fas fa-edit"></i></a></li>
                <li><a href="delete-movie.php?id=<?= $movie['id']; ?>" onclick="return confirm('Voulez vous effacer un film ?')"><i class="fas fa-trash-alt"></i></a></li>
            </ul>
        </div>
    <?php } ?>
</div>
<?php include('inc/footer.php');



