<?php

$etudiants = array('Mathieu','Maxence','Alexis','Quentin','Louis');
// print_r de ce tableau
echo '<pre>';
print_r($etudiants);
echo '</pre>';
// affichez le 4eme etudiant
echo $etudiants[3];
// ajouter un etudiants au tableaux
$etudiants[] = 'Anthony';
$etudiants[] = 'Thibault';
// modifiez , les deux premiers etudiants, pour voir leur prenom et leur nom
$etudiants[0] .= ' Bey';
$etudiants[1] .= ' Bossin';
// foreach
foreach ($etudiants as $etudiant) {
    echo '<p>' . $etudiant . '</p>';
}
//echo '<pre>';
//print_r($etudiants);
//echo '</pre>';
// Contruisez un tableau $nums contenant les nombres de 10 à 20 a l'aide d'un boucle
$nums = array();
for($i = 10;$i <= 20;$i++) {
    $nums[] = $i;
}
print_r($nums);
///////////////////
//  tableau associatif
////////////////////
$livre = array(
    // key => value
    'titre'  => 'Le rouge et le noir',
    'annee'  => 1830,
    'pages'  => 640,
    'auteur' => 'Stendal'
);
echo '<h1>'.$livre['titre'].'</h1>';
echo '<p>Year : '.$livre['annee'].'</p>';
// corriger le nom de l'auteur
$livre['auteur'] = 'Stendhal';
// ajouter un code ISBN (85854537473)
$livre['isbn'] = 85854537473;
// ajouter un price (5,87)
$livre['price'] = 5.87;

// enlever l'annee
unset($livre['annee']);

echo '<pre>';
print_r($livre);
echo '</pre>';

foreach ($livre as $key => $value) {
    echo '<p>' . ucfirst($key) . ' : ' . $value . '</p>';
}

// créez un tableau vide => $me
$me = array();
// ensuite ajouter 3 keys => nom, prenom, age
$me['nom'] = 'Quidel';
$me['prenom'] = 'Antoine';
$me['age'] = 43;
// a l'aide du tableau vous affichez votre age.
echo $me['age'];
// Faites vous vieillir de 5 ans.
$me['age'] += 5;
print_r($me);
// créez un tableau $mess
$mess = array();
// ajouter un nombre entier
$mess[] = 543;
// ajouter une valeur boolean
$mess[] = true;
// ajouter le tableau $me
$mess[] = $me;
// ajouter le tableau $etudiants
$mess[] = $etudiants;

echo $mess[2]['prenom'];
echo $mess[3][4];

echo '<pre>';
print_r($mess);
echo '</pre>';








