<?php
require('inc/fonction.php');


maPremiereFonction();
bonjour('antoine','dada');
bonjour('antoine');
bonjour('anais','dede');
bonjour('Louis');

$resultat = division(4674756,23445); //
echo division($resultat,2);
$users = [
    ['nom' => 'Mathilde','mail' => 'mathilde@dede.fr','age' => 24],
    ['nom' => 'Bernard','mail' => 'bernard@dede.fr','age' => 27],
    ['nom' => 'Jacky','mail' => 'jacky@dede.fr','age' => 34],
    ['nom' => 'Michel','mail' => 'michel@dede.fr','age' => 44],
];
debug($users);

include('inc/header.php');
?>

    <h1>Blog Page</h1>


<?php include('inc/footer.php');