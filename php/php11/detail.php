<?php

require('inc/fonction.php');
require('inc/pdo.php');

if(!empty($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $article = getArticleById($id);
    //debug($article);
    if(empty($article)) {
        die('404');
    }
} else {
    die('404');
}


?>
<div class="article">
    <h2><?= $article['title']; ?></h2>
    <p><?= nl2br($article['description']); ?></p>
    <p class="date"><?= date('d/m/Y',strtotime($article['created_at'])); ?></p>
</div>

