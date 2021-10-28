<?php

$tab = array();
$tab[0] = array('A','C','O','D');
$tab[1] = array('J','E','O','Z');
$tab[2] = array('T','U','I');
$tab[3] = array('A','P','R');

echo $tab[1][0] . $tab[2][1] .$tab[3][1] . $tab[2][2] . $tab[2][0] . $tab[1][1] . $tab[3][2];

echo '<pre>';
print_r($tab);
echo '</pre>';
// uniquement grâce à $tabs et en un seul echo
    // JUPITER
