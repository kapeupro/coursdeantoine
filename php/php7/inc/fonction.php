<?php

function maPremiereFonction()
{
    echo 'Bravo pour votre première fonction !';
}
// VARIABLE SONT LOCALE A LA FONCTION
function bonjour($prenom, $nom = 'Quidel')
{
    echo '<p>Bonjour ' . $prenom . ' ' . $nom . '</p>';
}

// division

function division(float $nbr1,float $nbre2)
{
    return $nbr1 / $nbre2;
}

function debug(array $tableau)
{
    echo '<pre style="height:200px;overflow-y: scroll;font-size: .7rem;padding: .6rem;font-family: Consolas, Monospace;background-color: #000;color:#fff;">';
    print_r($tableau);
    echo '</pre>';
}
// VARIABLE SONT LOCALE A LA FONCTION

$variable = 12;

function testVariable()
{
    global $variable;

    echo $variable;
}
testVariable();


// maj
    // chaine de caractére en minuscule puis la premiere lettre de la phrase an majuscule
function maj(string $string): string
{
    //    $s = mb_strtolower($string);
    //    return ucfirst($s);
    return ucfirst(strtolower($string));
}

echo maj('gduiIULkj dkhjdfhkjlfdslkjhdsfkjlh dsjhhjKJH');
echo maj('fHTHJygjh5ghjkj kHKJhk j');

// minus
    // majuscule
    // premiere lettre en minuscule

function minus(string $string) : string
{
    // $s = strtoupper($string);
    // return lcfirst($s);
    return lcfirst(strtoupper($string));
}
echo minus('FHTHJygjh5ghjkj kHKJhk j');