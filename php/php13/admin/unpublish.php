<?php
require('../inc/pdo.php');
require('../inc/request.php');
//require('../inc/fonction.php');

if (!empty($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $article = getArticleById($id);
    if (empty($article)) {
        Abort404();
    } else {
        changeStatusArticle($id,'draft');
        header('Location: index.php');
    }
} else {
    Abort404();
}
