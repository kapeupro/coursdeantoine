<?php
require('inc/fonction.php');
require('inc/pdo.php');

$sql = "SELECT * FROM article ORDER BY created_at DESC";
// prepare la request
$query = $pdo->prepare($sql);
// execute la query
$query->execute();
// recuperer les données
$articles = $query->fetchAll();
//debug($articles);

?>
<p><a href="new.php">Ajouter un article</a></p>
<div class="articles">
    <?php  foreach ($articles as $article) { ?>
        <div class="article">
            <h2><?= $article['title']; ?></h2>
            <p><?= nl2br($article['description']); ?></p>
            <p class="date"><?= date('d/m/Y',strtotime($article['created_at'])); ?></p>
            <ul>
                <li><a href="detail.php?id=<?= $article['id']; ?>">Voir</a></li>
                <li><a href="update.php?id=<?= $article['id']; ?>">Update</a></li>
                <li><a href="delete.php?id=<?= $article['id']; ?>" onclick="return confirm('Voulez vous vraiment effacer cet article ?')">Delete</a></li>
            </ul>
        </div>
    <?php } ?>
</div>








