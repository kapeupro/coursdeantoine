<?php


function getMovies($limit = 20)
{
    global $pdo;
    $sql = "SELECT * FROM movies_full ORDER BY RAND() LIMIT $limit";
    $query = $pdo->prepare($sql);
    $query->execute();
    return $query->fetchAll();
}

function deleteMovieById($id)
{
    global $pdo;
    $sql = "DELETE FROM article WHERE id = :id";
    $query = $pdo->prepare($sql);
    $query->bindValue(':id',$id,PDO::PARAM_INT);
    $query->execute();
}

function getMovieById($id)
{
    global $pdo;
    $sql = "SELECT * FROM movies_full WHERE id = :id";
    $query = $pdo->prepare($sql);
    $query->bindValue(':id',$id,PDO::PARAM_INT);
    $query->execute();
    return $query->fetch();
}

