<?php

require('../inc/pdo.php');
require('../inc/request.php');
require('../inc/fonction.php');

$errors = array();
if(!empty($_POST['submitted'])) {
    // Faille XSS
    $auteur = cleanXss('auteur');
    $title   = cleanXss('title');
    $content   = cleanXss('content');
    $status   = cleanXss('status');
    // Validation
    $errors = textValidation($errors,$auteur,'auteur',3, 40);
    $errors = textValidation($errors,$title,'title',3,250);
    $errors = textValidation($errors,$content,'content',3,2000);
    if(empty($status)) {
        $errors['status'] = 'Veuillez renseigner un status';
    }
    if(count($errors) == 0) {
        insertArticle($title,$auteur,$content,$status);
        header('Location: index.php');
    }
}
include('inc/header-back.php'); ?>

    <h1>Ajouter un article</h1>

    <form action="" method="post" class="wrapform" novalidate>
        <label for="auteur">Auteur *</label>
        <input type="text" id="auteur" name="auteur" value="<?= recupInputValue('auteur'); ?>">
        <span class="error"><?= viewError($errors,'auteur'); ?></span>

        <label for="title">Titre *</label>
        <input type="text" id="title" name="title" value="<?= recupInputValue('title'); ?>">
        <span class="error"><?= viewError($errors,'title'); ?></span>

        <label for="content">content *</label>
        <textarea name="content"><?= recupInputValue('content'); ?></textarea>
        <span class="error"><?= viewError($errors,'content'); ?></span>
        <?php
        $status = array(
            'draft' => 'brouillon',
            'publish' => 'Publié'
        );
        ?>
        <select name="status">
            <option value="">---------------------</option>
            <?php foreach ($status as $key => $value) {
                $selected = '';
                if(!empty($_POST['status'])) {
                    if($_POST['status'] == $key) {
                        $selected = ' selected="selected"';
                    }
                }
                ?>
                <option value="<?php echo $key; ?>"<?php echo $selected; ?>><?php echo $value; ?></option>
            <?php } ?>
        </select>
        <span class="error"><?= viewError($errors,'status'); ?></span>

        <input type="submit" name="submitted" value="Ajouter un article">
    </form>

<?php include('inc/footer-back.php');



