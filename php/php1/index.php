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
//=====================================
// Les conditions ---  Opérateurs de comparaison
//=====================================
// $a == $b , Egal, TRUE si $a est égal à $b
// $a === $b , identique,  TRUE si $a est égal à $b et qu'ils sont de même type.
// 12 == '12' => true
// 12 === '12' => false
// $a != $b,  Différent , TRUE si $a est différent de $b
// $a !== $b,  Différent, TRUE si $a est différent de $b ou bien s'ils ne sont pas du même type.

// $a < $b,    Plus petit que,   TRUE si $a est strictement plus petit que $b.
// $a > $b  ,  Plus grand,      TRUE si $a est strictement plus grand que $b.
// $a <= $b ,   Inférieur ou égal,   TRUE si $a est plus petit ou égal à $b.
// $a >= $b,   Supérieur ou égal,   TRUE si $a est plus grand ou égal à $b.

//=====================================
// Les conditions ---  Les opérateurs logiques
//=====================================
// ET  => &&, AND
// OU  => ||, OR
// !  => negation
$homme = true;
$age = 43;
if($homme === true && $age >= 18) {

}

$a = '42';
$b = ($a === 42); // false

if ($a > 0 && !$b) {
    echo 'Pomme';
} elseif ($b && $a <= 42) {
    echo 'Poire';
} elseif (!$a || $b > 42) {
    echo 'Abricot';
}

if($age >= 18 && $age <= 74) {
    echo 'Je suis actif';
}
echo '<br>';
//===========================================
// Arithmétique et incrémentation ----  opérateurs de base (+-/*)
//===========================================
// -$a,     Négation ,    Opposé de $a.  // -12
// $a + $b  ,  Addition ,  Somme de $a et $b.
// $a - $b,    Soustraction   ,   Différence de $a et $b.
// $a * $b,    Multiplication,   Produit de $a et $b.
// $a / $b,    Division,    Quotient de $a et $b.
// $a % $b  ,   Modulo ,   Reste de $a divisé par $b. Reste de la division
$chiffre = 3;
echo  $chiffre % 2; // => 1 => impair

$chiffre2 = 122;
echo  $chiffre2 % 2; // => 0 => pair

if($chiffre % 2 == 1) {
    echo 'Le chiffre est pair';
}
// Precedence
$calcul = 4 + 6 * 3; // ??? => 22

//===================
// Incrémentation -- décrementation
//===================

// Incrementer
$i = 1;
$i++; // $i = $i + 1;  // 2
echo $i; // 2
// Décrementer
$i--;
echo $i; // 1

$x = 4;
$x++;
echo $x; // 5

echo 'La valeur de x avec une post-incrementation est de ' . $x++; // 5
echo $x; // 6
echo ' La valeur de x avec une pre-incrementation est de ' . ++$x; // 7
echo $x; // 7
echo $x--; // 7
echo $x; // 6

//===================
// les opérateurs combinés +=, -=, etc.
//===================
// Concaténation égale
$html = '<h2>';
$html .= 'Titre de la maison';
$html .= '</h2>';

//$html2 = '<h2>';
//$html2 = $html2 . 'Titre de la maison';
//$html2 = $html2 . '</h2>';
echo $html;
////////
// +=  Plus Egal $x += 2;  $x = $x + 2;
////////
$y = 4;
$y+=12; // $y = $y + 12;
echo $y; // 16
////////
// -=  Moins Egal  $x -= 4;  $x = $x - 4;
////////

// *=  Multiplie Egal  $x *= 3;  $x = $x * 3;
// /=  Divise Egal $x /= 2;  $x = $x / 2;
// %=  Module Egal $x %= 5;  $x = $x % 5;

