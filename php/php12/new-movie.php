<?php

require('inc/pdo.php');
require('inc/fonction.php');
require('inc/request.php');
$errors = array();
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
        $sql = "INSERT INTO movies_full (title,year,plot,directors,runtime,created)
                VALUES (:title,:year,:plot,:dir,:run,NOW())";
        $query = $pdo->prepare($sql);
        $query->bindValue(':title',$title,PDO::PARAM_STR);
        $query->bindValue(':year',$year,PDO::PARAM_INT);
        $query->bindValue(':plot',$plot,PDO::PARAM_STR);
        $query->bindValue(':dir',$directors,PDO::PARAM_STR);
        $query->bindValue(':run',$runtime,PDO::PARAM_INT);
        $query->execute();
        $newid = $pdo->lastInsertId();
        header('Location: single-movie.php?id='.$newid);
    }
}
include('inc/header.php'); ?>
    <form action="" method="post" class="wrapform" novalidate>
        <label for="title">Titre</label>
        <input type="text" name="title" id="title" value="<?php recupInputValue('title'); ?>">
        <span class="error"><?php viewError($errors,'title'); ?></span>

        <label for="year">Année</label>
        <input type="number" name="year" id="year" value="<?php recupInputValue('year'); ?>">
        <span class="error"><?php viewError($errors,'year'); ?></span>

        <label for="plot">Résumé</label>
        <textarea name="plot" id="plot"><?php recupInputValue('plot'); ?></textarea>
        <span class="error"><?php viewError($errors,'plot'); ?></span>

        <label for="directors">directors</label>
        <input type="text" name="directors" id="directors" value="<?php recupInputValue('directors'); ?>">
        <span class="error"><?php viewError($errors,'directors'); ?></span>

        <label for="runtime">Durée du film</label>
        <input type="number" name="runtime" id="runtime" value="<?php recupInputValue('runtime'); ?>">
        <span class="error"><?php viewError($errors,'runtime'); ?></span>

        <input type="submit" name="submitted" value="Ajouter un film">
    </form>
<?php include('inc/footer.php');
