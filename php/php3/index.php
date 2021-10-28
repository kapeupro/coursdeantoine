<?php
////////////////////////
///  BOUCLES
///////////////////////
// WHILE & DO WHILE
$i = 0;
$num = 50;
while ($i < 10) {
    $num--;
    $i++;
}
echo $num; // 40
do {
    $i++;
    $num--;
} while ($i < 20);
echo $num; // 30
echo '<br>';
////////////////////////
/// for
/////////////////////////
for ($i = 0;$i <= 200;$i++) {
    echo $i . ',';
}
echo '<br>';
// affichez les nombres de 1 à 100 avec un espace entre chaque
for($i = 1;$i <= 100;$i++) {
    echo $i . ' ';
}
echo '<br>';
// Affichez les nombres de 5 à 25, séparé par virgule
for($i = 5; $i <= 25; $i++) {
    echo $i;
    if($i != 25) {
        echo ', ';
    }
}
echo '<br>';
// affichez les multiples de 5 compris entre 0 et 120 séparé par tiret du 6 => -
for($i = 0; $i <= 120;$i+=5) {
    echo $i;
    if($i != 120) {
        echo '-';
    }
}
echo '<br>';
// affichez les nombres pairs de 19 à 67, séparés par balise br
for($i = 19; $i <= 67; $i++) {
    if($i % 2 == 0) {
        echo $i . '<br>';
    }
}

echo '<br>';
// Affichez toutes les années depuis votre année de naissance jusqu'a aujourd'hui. Chaque année dans un p qui possède la class "birth_date"
$currentYear = date('Y');
for($i = 1978; $i <= $currentYear; $i++) {
    echo '<p class="birth_date">'.$i.'</p>';
}
echo '<br>';
// affichez les nombres de 50 à 25, en ordre décroissant, sauf le 30.
for($i = 50; $i >= 25;$i--) {
    if($i != 30) {
        echo $i. '-';
    }
}
echo '<br>';
// Affichez , a l'aide de balise html les nombres de 1 à 50. Les nombres de 36 à 47 doivent être en vert les autres en rouge.
for($i = 1; $i <= 50; $i++) {
//    $color = 'red';
//    if( $i >= 36 && $i <= 47 ) {
//        $color = 'green';
//    }
    $color = ( $i >= 36 && $i <= 47 ) ? 'green' : 'red';
    echo '<span style="color:'.$color.';">'.$i.'</span>';
}

$musiques = array('Basse', 'Batterie', 'Guitare', 'Piano', 'Percu', 'Voix','Synth','Xylophone','Basse', 'Batterie', 'Guitare');

echo '<pre>';
print_r($musiques);
echo '</pre>';
echo $musiques[0]; // Basse
echo '<ul>';
for($i = 0; $i < count($musiques);$i++) {
    echo '<li>' . $musiques[$i] . '</li>';
}
echo '</ul>';

$fruits = array('Banane','Kiwi', 'Patate', 'Papaye', 'Cerise');
echo '<div class="fruits">';
for($i = 0; $i < count($fruits); $i++) {
    echo '<p class="fruit">' . $fruits[$i] . '</p>';
}
echo '</div>';

// foreach
$legumes = array('Courgette','Tomate','Carotte','Blette','Salade');
foreach ($legumes as $legume) {
    echo $legume;
}

echo '<ul>';
foreach ($musiques as $instrument) {
    echo '<li>' . $instrument . '</li>';
}
echo '</ul>';

echo '<div class="fruits">';
foreach ($fruits as $fruit) {
    echo '<div class="fruit">' . $fruit . '</div>';
}
echo '</div>';

//$tiroirs = ['clef'];
$tiroirs = array('clef','monnaie','capote','piles','stylo bic');
// ul li => for
// ul li => foreach
// ul li => for => methode en alternance
// ul li => foreach => methode en alternance
echo '<ul>';
for($i = 0; $i < count($tiroirs);$i++) {
    echo '<li>'.$tiroirs[$i].'</li>';
}
echo '</ul>';

echo '<ul>';
foreach ($tiroirs as $tiroir) {
    echo '<li>' . $tiroir . '</li>';
}
echo '</ul>';
?>
<ul>
    <?php for($i = 0; $i < count($tiroirs);$i++) { ?>
        <li><?= $tiroirs[$i]; ?></li>
    <?php } ?>
</ul>

<ul>
    <?php foreach ($tiroirs as $tiroir) { ?>
        <li><?= $tiroir; ?></li>
    <?php } ?>
</ul>











