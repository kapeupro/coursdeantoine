<?php
require('inc/pdo.php');
require('inc/request.php');
require('inc/fonction.php');

$articles = getArticles(10,'publish');

include('inc/header.php'); ?>
<section id="articles">
    <?php foreach ($articles as $article) { ?>
        <div class="article">
            <h2><?= $article['title']; ?></h2>
            <p><?= $article['auteur']; ?></p>
            <p><?= dateFormat($article['created_at']); ?></p>
            <a href="single.php?id=<?= $article['id']; ?>">Voir plus</a>
        </div>
    <?php } ?>
</section>
<?php include('inc/footer.php');