<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Front - Blog</title>

    <link rel="stylesheet" href="./asset/css/style.css">
</head>
</head>
<body>

    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="admin/index.php">Back-office</a></li>
            </ul>
        </nav>

        <form action="search.php" method="get" style="width: 100px">
            <input type="search" name="search" id="search" value="<?php if(!empty($_GET['search'])) {echo $_GET['search'];} ?>">
            <input type="submit" value="Recherche">
        </form>
    </header>



    <div class="wrap">



