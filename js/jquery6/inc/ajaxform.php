<?php
// require pdo , function.php
$errors = array();
// Faille XSS
// Validation
// // si pas d'error
//          // send email
//             // insert into
$errors['nom'] = 'Error nom';

function showJson($data) {
    header("Content-type: application/json");
    $json = json_encode($data,JSON_PRETTY_PRINT);
    if($json) {
        die($json);
    } else {
        die('error in json encoding');
    }
}

showJson(array(
   'errors' => $errors,
   'fruits' => array('banane','kiwi')
));