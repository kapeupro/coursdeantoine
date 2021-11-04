<?php
// Script de passage

require('inc/fonction.php');
require('inc/pdo.php');

if(!empty($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $article = getArticleById($id);
    if(!empty($article)) {
        $sql = "DELETE FROM article WHERE id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id',$id,PDO::PARAM_INT);
        $query->execute();
        header('location: index.php');
    } else {
        die('404');
    }
}
else {
    die('404');
}