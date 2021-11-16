<?php



try {
    $pdo = new PDO('mysql:host=localhost;dbname=nfs5', "root", "", array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    ));
} catch (PDOException $e) {
    echo 'Erreur de connexion : ' . $e->getMessage();
}


function debug($tableau)
{
    echo '<pre style="height:300px;overflow-y: scroll;font-size: .7rem;padding: .6rem;font-family: Consolas, Monospace;background-color: #000;color:#fff;">';
    print_r($tableau);
    echo '</pre>';
}



$sql = "SELECT c.title as title_category,p.id AS id_article, p.title AS title_article 
        FROM post AS p
        INNER JOIN category AS c
        ON p.category_id = c.id";

$sqlright = "SELECT c.title as title_category,p.id AS id_article, p.title AS title_article 
        FROM post AS p
        RIGHT JOIN category AS c
        ON p.category_id = c.id";

$sqlleft = "SELECT c.title as title_category,p.id AS id_article, p.title AS title_article 
        FROM post AS p
        LEFT JOIN category AS c
        ON p.category_id = c.id";
$query = $pdo->prepare($sqlleft);
$query->execute();
$articles = $query->fetchAll();



debug($articles);

