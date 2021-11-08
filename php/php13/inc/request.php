<?php

/**
 * @param int $limit
 * @param string $status
 * @return array|false
 */
function getArticles(int $limit = 20, string $status = 'all', $offset = 0)
{
    global $pdo;
    if($status == 'all') {
        $sql = "SELECT * FROM articles ORDER BY created_at DESC LIMIT $limit OFFSET $offset";
    } else {
        $sql = "SELECT * FROM articles WHERE status = '$status' ORDER BY created_at DESC LIMIT $limit OFFSET $offset";
    }
    $query = $pdo->prepare($sql);
    $query->execute();
    return $query->fetchAll();
}

function getArticleBySearch($search)
{
    global $pdo;
    $sql = "SELECT * FROM articles WHERE title LIKE :search OR content LIKE :search";
    $query = $pdo->prepare($sql);
    $query->bindValue(':search','%'.$search.'%',PDO::PARAM_STR);
    $query->execute();
    return $query->fetchAll();
}

function countAllArticles()
{
    global $pdo;
    $sql = "SELECT COUNT(id) FROM articles";
    $query = $pdo->prepare($sql);
    $query->execute();
    return $query->fetchColumn();
}

/**
 * @param $id
 * @return mixed
 */
function getArticleById(int $id){

    global $pdo;
    $sql = "SELECT * FROM articles WHERE id = :id";
    $query = $pdo->prepare($sql);
    $query->bindValue(':id',$id,PDO::PARAM_INT);
    $query->execute();
    return $query->fetch();
}


/**
 * @param $title
 * @param $auteur
 * @param $content
 * @param $status
 */
function insertArticle($title, $auteur, $content, $status)
{
    global $pdo;
    $sql = "INSERT INTO articles (title,auteur,content, created_at,status)
                VALUES (:title,:auteur,:content,NOW(),:status)";
    $query = $pdo->prepare($sql);
    $query->bindValue(':title',$title,PDO::PARAM_STR);
    $query->bindValue(':auteur',$auteur,PDO::PARAM_STR);
    $query->bindValue(':content',$content,PDO::PARAM_STR);
    $query->bindValue(':status',$status,PDO::PARAM_STR);
    $query->execute();
}

/**
 * @param $id
 * @param $title
 * @param $auteur
 * @param $content
 * @param $status
 */
function updateArticle(int $id, $title, $auteur, $content, $status)
{
    global $pdo;
    $sql = "UPDATE articles SET title = :title,content = :content,auteur = :auteur,status = :status, modified_at = NOW() WHERE id = :id";
    $query = $pdo->prepare($sql);
    $query->bindValue(':title',$title,PDO::PARAM_STR);
    $query->bindValue(':auteur',$auteur,PDO::PARAM_STR);
    $query->bindValue(':content',$content,PDO::PARAM_STR);
    $query->bindValue(':status',$status,PDO::PARAM_STR);
    $query->bindValue(':id',$id,PDO::PARAM_INT);
    $query->execute();
}

/**
 * @param int $id
 * @param string $status
 */
function changeStatusArticle(int $id, $status = 'publish')
{
    global $pdo;
    $sql = "UPDATE articles SET status = :status, modified_at = NOW() WHERE id = :id";
    $query = $pdo->prepare($sql);
    $query->bindValue(':status',$status,PDO::PARAM_STR);
    $query->bindValue(':id',$id,PDO::PARAM_INT);
    $query->execute();
}


/**
 * @param int $id
 * @return array
 */
function getAllcommentsForArticleId(int $id,$status): array
{
    global $pdo;
    $sql = "SELECT * FROM comments WHERE id_article = :id AND status = :status ORDER BY created_at DESC";
    $query = $pdo->prepare($sql);
    $query->bindValue(':id',$id,PDO::PARAM_INT);
    $query->bindValue(':status',$status,PDO::PARAM_STR);
    $query->execute();
    return $query->fetchAll();
}

function getCommentsWithStatus($status)
{
    global $pdo;
    $sql = "SELECT * FROM comments WHERE status = :status ORDER BY created_at DESC";
    $query = $pdo->prepare($sql);
    $query->bindValue(':status',$status,PDO::PARAM_STR);
    $query->execute();
    return $query->fetchAll();
}

function getCommentById($id) {
    global $pdo;
    $sql = "SELECT * FROM comments WHERE id = :id";
    $query = $pdo->prepare($sql);
    $query->bindValue(':id',$id,PDO::PARAM_INT);
    $query->execute();
    return $query->fetch();
}

function changestatusComment($id,$status)
{
    global $pdo;
    $sql = "UPDATE comments SET status = :status, modified_at = NOW() WHERE id = :id";
    $query = $pdo->prepare($sql);
    $query->bindValue(':status',$status,PDO::PARAM_STR);
    $query->bindValue(':id',$id,PDO::PARAM_INT);
    $query->execute();
}