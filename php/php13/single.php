<?php

require('inc/pdo.php');
require('inc/request.php');
require('inc/fonction.php');

if(!empty($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $article = getArticleById($id);
    if (empty($article)) {
        Abort404();
    }
} else {
    Abort404();
}
// En attente de la mise en place de la modération
// aller chercher que les comments avec le status publish , A faire plus tard +++
$comments = getAllcommentsForArticleId($id,'publish');


$errors = [];
$success = false;
if(!empty($_POST['submitted'])) {
    $auteur = cleanXss('auteur');
    $content = cleanXss('content');
    $errors = textValidation($errors,$auteur,'auteur',3, 40);
    $errors = textValidation($errors,$content,'content',3,2000);
    if(count($errors) == 0) {
        $sql = "INSERT INTO comments (id_article,content, auteur, created_at,status)
            VALUES (:idarticle,:content,:auteur,NOW(),'new')";
        $query = $pdo->prepare($sql);
        $query->bindValue(':auteur',$auteur,PDO::PARAM_STR);
        $query->bindValue(':content',$content,PDO::PARAM_STR);
        $query->bindValue(':idarticle',$id,PDO::PARAM_INT);
        $query->execute();
        $success = true;
        //header('Location: single.php?id='.$id);
    }
}


include('inc/header.php'); ?>
    <div class="article">
        <h2><?= $article['title']; ?></h2>
        <p><?= $article['auteur']; ?></p>
        <p><?= nl2br($article['content']); ?></p>
        <p>Date de création<?= dateFormat($article['created_at']); ?></p>
        <?php if(!empty($article['modified_at'])) { ?>
            <p><?= dateFormat($article['modified_at']); ?></p>
        <?php } ?>
    </div>

<br>
<br>
<br>
<br>
    <h2>Ajouter un commentaire</h2>

    <?php if($success) { ?>
        <p>Merci pour votre commenatire, notre equipe le validera dans les plus brefs delais</p>
    <?php } else { ?>
        <form action="" method="post" class="wrapform" novalidate>
            <label for="auteur">Auteur *</label>
            <input type="text" id="auteur" name="auteur" value="<?= recupInputValue('auteur'); ?>">
            <span class="error"><?= viewError($errors,'auteur'); ?></span>

            <label for="content">content *</label>
            <textarea name="content"><?= recupInputValue('content'); ?></textarea>
            <span class="error"><?= viewError($errors,'content'); ?></span>

            <input type="submit" name="submitted" value="Ajouter">
        </form>
    <?php } ?>

    <?php if(!empty($comments)) { ?>
        <h2>Les commentaire</h2>
        <?php foreach ($comments as $comment) { ?>
            <div class="comment">
                <p>Auteur : <?= $comment['auteur']; ?></p>
                <p><?= $comment['content']; ?></p>
                <hr>
            </div>
        <?php } ?>
    <?php } ?>

<?php include('inc/footer.php');