<?php

require('inc/pdo.php');
require('inc/fonction.php');
require('inc/request.php');
$errors = array();
if(!empty($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $movie = getMovieById($id);
    if(!empty($movie)) {
        if(!empty($_POST['submitted'])) {
            // Faille xss
            $title = cleanXss('title');
            $year = cleanXss('year');
            $plot = cleanXss('plot');
            $directors = cleanXss('directors');
            $runtime = cleanXss('runtime');
            // Validation
            $errors = textValidation($errors,$title,'title', 3, 200);
            $errors = textValidation($errors,$year,'year', 4, 4);
            $errors = textValidation($errors,$plot,'plot', 10, 600);
            $errors = textValidation($errors,$directors,'directors', 10, 600);
            $errors = textValidation($errors,$runtime,'runtime', 1, 3);

            if(count($errors) == 0) {
                $sql = "UPDATE movies_full SET title = :title,year = :year,plot = :plot,directors = :dir,runtime = :run WHERE id = :id";
                $query = $pdo->prepare($sql);
                $query->bindValue(':title',$title,PDO::PARAM_STR);
                $query->bindValue(':year',$year,PDO::PARAM_INT);
                $query->bindValue(':plot',$plot,PDO::PARAM_STR);
                $query->bindValue(':dir',$directors,PDO::PARAM_STR);
                $query->bindValue(':run',$runtime,PDO::PARAM_INT);
                $query->bindValue(':id',$id,PDO::PARAM_INT);
                $query->execute();
                header('Location: single-movie.php?id='.$id);
            }
        }
    } else {
        Abort404();
    }
} else {
    Abort404();
}


include('inc/header.php'); ?>

    <form action="" method="post" class="wrapform" novalidate>
        <label for="title">Titre</label>
        <input type="text" name="title" id="title" value="<?php recupInputValueForUpdate('title',$movie['title']); ?>">
        <span class="error"><?php viewError($errors,'title'); ?></span>

        <label for="year">Année</label>
        <input type="number" name="year" id="year" value="<?php recupInputValueForUpdate('year',$movie['year']); ?>">
        <span class="error"><?php viewError($errors,'year'); ?></span>

        <label for="plot">Résumé</label>
        <textarea name="plot" id="plot"><?php recupInputValueForUpdate('plot',$movie['plot']); ?></textarea>
        <span class="error"><?php viewError($errors,'plot'); ?></span>

        <label for="directors">directors</label>
        <input type="text" name="directors" id="directors" value="<?php recupInputValueForUpdate('directors',$movie['directors']); ?>">
        <span class="error"><?php viewError($errors,'directors'); ?></span>

        <label for="runtime">Durée du film</label>
        <input type="number" name="runtime" id="runtime" value="<?php recupInputValueForUpdate('runtime',$movie['runtime']); ?>">
        <span class="error"><?php viewError($errors,'runtime'); ?></span>

        <input type="submit" name="submitted" value="Modifier un film">
    </form>




<?php include('inc/footer.php');
