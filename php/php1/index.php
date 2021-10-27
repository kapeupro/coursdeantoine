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





