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


$datas = array(
    'success' => true,
    'error'   => 'veuillez renseigner ce champ'
);
showJson($datas);
