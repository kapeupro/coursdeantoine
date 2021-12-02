<?php


function showJson($data) {
    header("Content-type: application/json");
    $json = json_encode($data,JSON_PRETTY_PRINT);
    if($json) {
        die($json);
    } else {
        die('error in json encoding');
    }
}

if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['fruit'])) {
    $nom = trim(strip_tags($_POST['nom']));
    $prenom = trim(strip_tags($_POST['prenom']));
    $fruit = trim(strip_tags($_POST['fruit']));
    // validation
    //die('Je suis ' .  $nom . ' ' . $prenom . ' et j\'aime les ' . $fruit . 's');
    $data = array(
        'nom' => $nom,
        'prenom' => $prenom,
        'fruit'  => $fruit
    );
    showJson($data);
} else {
    die('error');
}





