<?php

function debug($tableau)
{
    echo '<pre style="height:300px;overflow-y: scroll;font-size: .7rem;padding: .6rem;font-family: Consolas, Monospace;background-color: #000;color:#fff;">';
    print_r($tableau);
    echo '</pre>';
}

function textValidation($errors,$value,$key,$min = 3,$max = 50)
{
    if(!empty($value)) {
        if(mb_strlen($value) < $min) {
            $errors[$key] = 'Min '.$min.' caractères';
        } elseif (mb_strlen($value) > $max) {
            $errors[$key] = 'Max '.$max.' caractères';
        }
    } else {
        $errors[$key] = 'Veuillez renseigner ce champ.';
    }
    return $errors;
}

function emailValidation($errors,$email,$key)
{
    if(!empty($email)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[$key] = 'Veuillez renseigner un email valid';
        }
    } else {
        $errors[$key] = 'Veuillez renseigner un email';
    }
    return $errors;
}

function cleanXss($key)
{
    return trim(strip_tags($_POST[$key]));
}
function recupInputValue($key)
{
    if(!empty($_POST[$key])) {
        echo $_POST[$key];
    }
}

function recupInputValueForUpdate($key,$data)
{
    if(!empty($_POST[$key])) {
        echo $_POST[$key];
    } else {
        echo $data;
    }
}


function viewError($errors,$key)
{
    if(!empty($errors[$key])) {
        echo $errors[$key];
    }
}


function remote_file_exists($url)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if( $httpCode == 200 ){return true;}
}

function imgMovie($film)
{
    $url = 'https://formation.weblitzer.fr/posters/'.$film['id'].'.jpg';
//    if(remote_file_exists($url)) {
        return '<img src="'.$url.'" alt="'.$film['title'].'">';
//    } else {
       // return '<img src="https://www.publicdomainpictures.net/pictures/280000/velka/not-found-image-15383864787lu.jpg">';
//    }

}
function Abort404()
{
    header('HTTP/1.1 404 Not Found');
    header('Location: 404.php');
}




