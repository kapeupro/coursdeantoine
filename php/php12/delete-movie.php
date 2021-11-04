<?php
require('inc/pdo.php');
require('inc/fonction.php');
require('inc/request.php');

if(!empty($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $movie = getMovieById($id);
    if (!empty($movie)) {
        deleteMovieById($id);
        header('location: index.php');
    } else {
        Abort404();
    }
} else {
    Abort404();
}