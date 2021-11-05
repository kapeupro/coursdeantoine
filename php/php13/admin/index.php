<?php

require('../inc/pdo.php');
require('../inc/request.php');
require('../inc/fonction.php');

$articles = getArticles(20);
//debug($articles);

include('inc/header-back.php'); ?>

    <table>
        <tr>
            <th>id</th>
            <th>titre</th>
            <th>content</th>
            <th>auteur</th>
            <th>created_at</th>
            <th>modified_at</th>
            <th>status</th>
            <th>Action</th>
        </tr>

        <?php foreach ($articles as $article) { ?>
            <tr>
                <td><?= $article['id']; ?></td>
                <td><?= $article['title']; ?></td>
                <td><?= substr($article['content'], 0,25); ?></td>
                <td><?= $article['auteur']; ?></td>
                <td><?= dateFormat($article['created_at']); ?></td>
                <td><?= dateFormat($article['modified_at']); ?></td>
                <td><?= $article['status']; ?></td>
                <td>
                    <ul>
                        <li><a href="editpost.php?id=<?= $article['id']; ?>">Editer</a></li>
                        <?php if($article['status'] == 'publish') { ?>
                            <li><a href="unpublish.php?id=<?= $article['id']; ?>">unPublish</a></li>
                        <?php } ?>
                    </ul>
                </td>
            </tr>
        <?php } ?>
    </table>
<?php include('inc/footer-back.php');