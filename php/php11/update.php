<?php
require('inc/fonction.php');
require('inc/pdo.php');
$errors = array();

if(!empty($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $article = getArticleById($id);
    if(!empty($article)) {
        if(!empty($_POST['submitted'])) {
            // Faille xss
            $title = cleanXss('title');
            $description = cleanXss('description');
            // validation
            $errors = textValidation($errors,$title,'title',3, 200);
            $errors = textValidation($errors,$description,'description',10, 1000);
            // si pas d'erreur
            if(count($errors) == 0) {
                $sql = "UPDATE article SET title = :title, description = :desc WHERE id = :id";
                $query = $pdo->prepare($sql);
                $query->bindValue(':title',$title,PDO::PARAM_STR);
                $query->bindValue(':desc',$description,PDO::PARAM_STR);
                $query->bindValue(':id',$id,PDO::PARAM_INT);
                $query->execute();
                header('Location: index.php');
                // UPDATE
            }
        }
    } else {
        die('404');
    }
} else {
    die('404');
}

include('inc/header.php'); ?>
    <form action="" method="post" class="wrapform" novalidate>
        <label for="title">Titre</label>
        <input type="text" name="title" id="title" value="<?php if(!empty($_POST['title'])) {echo $_POST['title']; } else {echo $article['title'];}  ?>">
        <span class="error"><?php viewError($errors,'title'); ?></span>

        <label for="description">Description</label>
        <textarea name="description" id="description"><?php if(!empty($_POST['description'])) {echo $_POST['description']; } else {echo $article['description'];}  ?></textarea>
        <span class="error"><?php viewError($errors,'description'); ?></span>

        <input type="submit" name="submitted" value="Modifier un article">
    </form>
<?php include('inc/footer.php');
