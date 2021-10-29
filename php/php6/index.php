<?php

$tab = array();
$tab[0] = array('A','C','O','D');
$tab[1] = array('J','E','O','Z');
$tab[2] = array('T','U','I');
$tab[3] = array('A','P','R');
echo $tab[1][0] . $tab[2][1] .$tab[3][1] . $tab[2][2] . $tab[2][0] . $tab[1][1] . $tab[3][2];
// JUPITER
echo '<pre>';
print_r($tab);
echo '</pre>';
// uniquement grâce à $tabs et en un seul echo

// Tableau multidimensionnel.
$paiements = array(
    array(
        'montant' => 12.55,
        'date'    => '12/12/2020'
    ),
    array(
        'montant' => 22.25,
        'date'    => '13/12/2020'
    ),
    array(
        'montant' => 19.10,
        'date'    => '14/12/2020'
    ),
);

// affichez le montant du premier paiement
echo $paiements[0]['montant'];
// affichez la date du dernier paiement
echo $paiements[2]['date'];
// Ajouter un nouveau paiement
$paiements[] = array(
    'montant' => 24.34,
    'date'    => '13/02/2021'
);
// modifier le montant du dernier paiement
$paiements[3]['montant'] = 12.12;
echo '<pre>';
print_r($paiements);
echo '</pre>';
// for & foreach
 // ul li => li (' le montant est de xxx à la date du YYYY')

echo '<ul>';
foreach ($paiements as $paiement) {
//    echo '<pre>';
//    print_r($paiement);
//    echo '</pre>';
    echo '<li>Le montant est de '.$paiement['montant'].' à la date du '.$paiement['date'] . '</li>';
}

echo '</ul>';

echo '<ul>';
for($i = 0;$i < count($paiements); $i++) {
//    echo '<pre>';
//    print_r($paiements[$i]);
//    echo '</pre>';
    echo '<li>Le montant est de '.$paiements[$i]['montant'].' à la date du '.$paiements[$i]['date'] . '</li>';
}
echo '</ul>';

$users = [
  ['nom' => 'Mathilde','mail' => 'mathilde@dede.fr','age' => 24],
  ['nom' => 'Bernard','mail' => 'bernard@dede.fr','age' => 27],
  ['nom' => 'Jacky','mail' => 'jacky@dede.fr','age' => 34],
  ['nom' => 'Michel','mail' => 'michel@dede.fr','age' => 44],
];
echo '<pre>';
print_r($users);
echo '</pre>';
/////////////////// AVEC for && foreach
// tous les users dans une section id => users
// chaque user dans une div class => user
    // le nom dans un H3
    // le mail dans un p class => user_email
    // l'age dans un p class => user_age

echo '<section id="users">';
foreach ($users as $user) {
    echo '<div class="user">';
        echo '<h3>'.$user['nom'].'</h3>';
        echo '<p class="user_email">'.$user['mail'].'</p>';
        echo '<p class="user_age">'.$user['age'].'</p>';
    echo '</div>';
}
echo '</section>';

?>
<section id="user">
    <?php foreach ($users as $user) { ?>
        <div class="user">
            <h3><?= $user['nom']; ?></h3>
            <p class="user_email"><?= $user['mail']; ?></p>
            <p class="user_age"><?= $user['age']; ?></p>
        </div>
    <?php } ?>
</section>
<?php
echo '<section id="users">';
     for($i = 0;$i < count($users); $i++) {
        echo '<div class="user">';
        echo '<h3>'.$users[$i]['nom'].'</h3>';
        echo '<p class="user_email">'.$users[$i]['mail'].'</p>';
        echo '<p class="user_age">'.$users[$i]['age'].'</p>';
        echo '</div>';
    }
echo '</section>';
?>
<section id="user">
    <?php for($i = 0;$i < count($users); $i++) { ?>
        <div class="user">
            <h3><?= $users[$i]['nom']; ?></h3>
            <p class="user_email"><?= $users[$i]['mail']; ?></p>
            <p class="user_age"><?= $users[$i]['age']; ?></p>
        </div>
    <?php } ?>
</section>

<?php
$arrayDeOuf = array(
    0 => "fdjsa", 1 => 2332,
    2 => array(0 => "dsajf", "sdfsd" => array(
            0 => 9034, "kkk" => "vvv", 2390 => array(
                'dede'  => 'drd'
        )), array(
            0 => 1, 1 => 2, 3,
            "k"
        )
    )
);




