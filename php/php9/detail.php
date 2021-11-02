<?php
require('inc/fonction.php');
require('brief/data.php');

if(!empty($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];





} else {
    die('404');
}



include('inc/header.php');

echo '<h2>Détail d\'un film</h2>';

include('inc/footer.php');