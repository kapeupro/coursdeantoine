<?php
require('../inc/fonction.php');
require('../inc/request.php');
require('../inc/pdo.php');
$errors = array();

if(!empty($_GET['id']) && ctype_digit($_GET['id'])) {
    $id = $_GET['id'];
    $article = getArticleById($id);
    if(empty($article)) { die('404'); }
} else { die('404'); }

if(!empty($_POST['submitted'])) {
    // Faille XSS
    $auteur  = cleanXss('auteur');
    $title   = cleanXss('title');
    $content = cleanXss('content');
    $status  = cleanXss('status');
    // Validation
    $errors = textValidation($errors,$auteur,'auteur',3, 40);
    $errors = textValidation($errors,$title,'title',3,250);
    $errors = textValidation($errors,$content,'content',3,2000);
    if(empty($status)) {
        $errors['status'] = 'Veuillez renseigner un status';
    }
    if(count($errors) == 0) {
        updateArticle($id,$title,$auteur,$content,$status);
        header('Location: index.php');
    }
}
include('inc/header-back.php'); ?>
<h1>Editer un article</h1>
<form action="" method="post">
    <label for="auteur">Auteur *</label>
    <input type="text" id="auteur" name="auteur" value="<?= recupInputValueForUpdate('auteur',$article['auteur']); ?>">
    <span class="error"><?= viewError($errors,'auteur'); ?></span>

    <label for="title">Titre *</label>
    <input type="text" id="title" name="title" value="<?= recupInputValueForUpdate('title',$article['title']); ?>">
    <span class="error"><?= viewError($errors,'title'); ?></span>

    <label for="content">content *</label>
    <textarea name="content"><?= recupInputValueForUpdate('content',$article['content']); ?></textarea>
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
            }elseif($article['status'] == $key) {
                $selected = ' selected="selected"';
            }
            ?>
            <option value="<?php echo $key; ?>"<?php echo $selected; ?>><?php echo $value; ?></option>
        <?php } ?>
    </select>
    <span class="error"><?= viewError($errors,'status'); ?></span>

    <input type="submit" name="submitted" value="Editer">
</form>

<?php   include('inc/footer-back.php');