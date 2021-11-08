<?php
require('../inc/fonction.php');
require('../inc/request.php');
require('../inc/pdo.php');


if(!empty($_GET['id']) && ctype_digit($_GET['id']) && !empty($_GET['status'])) {
    $id = $_GET['id'];
    $status = $_GET['status'];
    $comment = getCommentById($id);
    if(!empty($comment)) {
        if(in_array($status, array('publish','refused'))) {
            changestatusComment($id,$status);
            header('Location: comments.php');
        } else {
            Abort404();
        }
    } else {
        Abort404();
    }
} else {
   Abort404();
}