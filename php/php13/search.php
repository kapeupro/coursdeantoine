<?php

require('inc/pdo.php');
require('inc/request.php');
require('inc/fonction.php');

if(!empty($_GET['search'])) {
    $search= trim(strip_tags($_GET['search']));
    $articles = getArticleBySearch($search);
} else {
    Abort404();
}

include('inc/header.php'); ?>
<p>Votre recherche: <strong><?= $search; ?></strong></p>
    <hr>
    <section id="articles">
        <?php
        if(empty($articles)) {
            echo '<p>Aucun article pour votre recherche</p>';
        } else {
            foreach ($articles as $article) { ?>
                <div class="article">
                    <h2><?= $article['title']; ?></h2>
                    <p><?= $article['auteur']; ?></p>
                    <p><?= dateFormat($article['created_at']); ?></p>
                    <a href="single.php?id=<?= $article['id']; ?>">Voir plus</a>
                </div>
            <?php }
        } ?>

    </section>

<?php include('inc/footer.php');