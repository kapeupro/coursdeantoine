<?php
require('inc/fonction.php');
require('inc/pdo.php');

$errors = array();
$success = false;
if(!empty($_POST['submitted'])) {
    // Faille xss
    $title = cleanXss('title');
    $description = cleanXss('description');
    // validation
    $errors = textValidation($errors,$title,'title',3, 200);
    $errors = textValidation($errors,$description,'description',10, 1000);

    // si pas d'erreur
    if(count($errors) == 0) {
        // insert into ;)
        // Attention ici pas de sécurité. AIE  => nous verrons cela demain à la première heure
            // Injection SQL
        $sql = "INSERT INTO article (title,description,created_at) 
                VALUES ('$title','$description',NOW())";
        $query = $pdo->prepare($sql);
        $query->execute();
        $success = true;
        // header('Location: index.php');
    }
}

include('inc/header.php'); ?>
<?php if($success) { ?>
    <p>Merci pour votre article</p>
    <p><a href="index.php">Retour à l'accueil </a></p>
<?php } else { ?>
    <form action="" method="post" class="wrapform" novalidate>
        <label for="title">Titre</label>
        <input type="text" name="title" id="title" value="<?php recupInputValue('title'); ?>">
        <span class="error"><?php viewError($errors,'title'); ?></span>

        <label for="description">Description</label>
        <textarea name="description" id="description"><?php recupInputValue('description'); ?></textarea>
        <span class="error"><?php viewError($errors,'description'); ?></span>

        <input type="submit" name="submitted" value="Ajouter un article">
    </form>
<?php } ?>
<?php include('inc/footer.php');