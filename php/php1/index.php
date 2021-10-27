<h1>PHP</h1>
<?php
     //phpinfo();
    echo 'Bonjour';
?>

<p>dede</p>

<?php
    echo 'REBONJOUYR';
?>
<?php

//======================================================================
// VARIABLE
//======================================================================

$variable = '<h2>Hello world</h2>';
echo $variable;
$helloTheWorld12 = 'Helloooo';
// caracteres non autorisé =>   #$%&-
// $nom est different de $Nom => nom de variable sont sensible à la case

///////// STRING => Chaine de caractères
$title = '12 Annonces immobilières';
?>

<h1><?php echo $title; ?></h1>
<p>sous titre</p>

<?php
///////// INT : INTEGER
$year = 2021;
///////// FLOAT
$pourcentage = 19.6;
echo $year;
echo '<br>';
echo $pourcentage;
///////// BOOLEAN
$jeSuisLeFormateur = true;
$isOpen = false;
///////   NULL
$pasDeValeur = NULL;
echo '<br>';
/////// Type Composés ( Tableau, Object )
// Tableau
$tableau = array('Bien Loft plein sud','menagerie','maison',12, true);
//echo $tableau; // => marche pas
// notion de KEY (INDEX) & VALUE
echo '<pre>';
print_r($tableau);
//var_dump($tableau);
echo '<pre>';
echo $tableau[0];
echo '<br>';
echo $tableau[2];
// =============================
// COMMENTAIRES
// commentaire sur un ligne

/* ici un autre commentaire */

/*
 * comment 1
 * comment 2
 * comment 3
 */

// =============================
// DEBOGAGE
// =============================
// print_r(),
// die('ok');

// =============================
// SUPER GLOBAL
// =============================

echo '<pre>';
print_r($GLOBALS);
echo '</pre>';

// =============================
// CONCATENATION =>  .
// =============================

?>
<h1><?php echo $title; ?></h1>
<?php
echo '<h1>';
echo $title;
echo '</h1>';

echo '<h1>' . $title . '</h1>';
// exo
$chaine = 'Salut';
$chaine2 = 'Buzz';
$data1 = 'Formation';
$data2 = 'PHP';
// consigne => en une ligne ecrire "Salut Buzz, je suis en Formation PHP." et ceci dans un <p> qui possede la class title
// methode tout en php
echo '<p class="title">' . $chaine . ' ' . $chaine2 . ', je suis en ' . $data1 . ' ' . $data2 . '.</p>';
// methode en alternance
?>

<p class="title"><?php echo $chaine ?> <?= $chaine2; ?>, je suis en <?= $data1; ?> <?php echo $data2; ?>.</p>
<?php
// methode .=
$html = '<p>';
    $html .= $chaine;
    $html .= ' ' . $chaine2;
    $html .= ', je suis en ';
    $html .= $data1;
    $html .= ' ';
    $html .= $data2;
$html .= '.</p>';

echo '<div>' . $html . '</div>'; // Salut Buzz, je suis en Formation PHP.

// '' vs "" , echappement
echo "<p class=\"title\">titre 1 </p>";
echo '<p class="title">titre 1 </p>';

$traitees = 'lu';
$la = 'ici';

echo 'Les variables sont $traitees $la'; // Les variables sont $traitees $la
echo "Les variables sont $traitees $la"; // Les variables sont lu ici

// échappement
echo 'Arnold a dit: I\'ll be back';
echo "Arnold a dit: \"I'll be back\"";
echo 'Arnold a dit: "I\'ll be back"';

echo '<br>';
//=====================================
// Les conditions --- if elseif else
//=====================================
//  Si / Sinon Si / Sinon

$mot1 = 'musique';
$mot2 = 'sport';
$mot3 = 'musique';

if($mot1 == $mot2) {
    echo 'Les mots sont identiques';
} else {
    echo 'Les mots sont différents';
}
echo '<br>';

$success = false;
if($success) {
    echo 'Je suis en succès';
} else {
    echo 'Je suis en echec';
}
echo $mot1 == $mot3; // true => 1
echo $mot1 == $mot2; // false => 0

$age = 32;

if($age >= 18) {
    echo 'Je suis majeur';
    $majeur = true;
} else {
    echo 'Je suis mineur';
    $majeur = false;
}
// Structure Ternaire
$majeur = ($age >= 18) ? true : false;

echo $majeur == true ? 'Je suis majeur' : 'Vous etes mineur';

// exo
// moins de 18 => mineur
// moins de 18 & que moins 6 an => en maternelle
// sinon si plus de 78 => retraite
// sinon je suis un actif

if($age < 18) {
    echo 'je suis mineur';
    if($age > 6 ){
        echo ' en maternelle';
    }
} elseif ($age > 78) {
    echo 'Je suis retraité';
} else {
    echo 'je suis actif';
}

if($age > 18):
    echo 'Plus de 18 ans';
elseif($age < 6):
    echo 'Je suis en maternelle';
endif;

// Switch
$i = 1;
if ($i == 0) {
    echo 'i égal 0';
} elseif ($i == 1) {
    echo 'i égal 1';
} elseif ($i == 2) {
    echo 'i égal 2';
} else {
    echo 'i inconnue';
}

switch ($i) {
    case 0:
        echo 'i égal 0';
        break;
    case 1:
        echo 'i égal 1';
        break;
    case 2:
        echo 'i égal 2';
        break;
    default:
        echo 'i inconnue';
        break;
}



