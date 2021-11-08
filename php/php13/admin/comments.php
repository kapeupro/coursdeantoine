<?php

require('../inc/pdo.php');
require('../inc/request.php');
require('../inc/fonction.php');

$comments = getCommentsWithStatus('new');

include('inc/header-back.php'); ?>

    <table>
        <tr>
            <th>id</th>
            <th>id_article</th>
            <th>content</th>
            <th>auteur</th>
            <th>created_at</th>
            <th>status</th>
            <th>Action</th>
        </tr>
        <?php foreach ($comments as $comment) { ?>
            <tr>
                <td><?= $comment['id']; ?></td>
                <td><?= $comment['id_article']; ?></td>
                <td><?= $comment['content']; ?></td>
                <td><?= $comment['auteur']; ?></td>
                <td><?= dateFormat($comment['created_at']); ?></td>
                <td><?= $comment['status']; ?></td>
                <td>
                    <ul>
                        <li><a href="moderate-comment.php?id=<?= $comment['id']; ?>&status=publish">Valider</a></li>
                        <li><a href="moderate-comment.php?id=<?= $comment['id']; ?>&status=refused">Refuser</a></li>
                    </ul>
                </td>
            </tr>
        <?php } ?>
    </table>

<?php include('inc/footer-back.php');