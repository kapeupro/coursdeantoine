<?php

$url = 'https://www.php.net/';
$text = 'Logo PHP';
$width = 200;
$image = 'https://e7.pngegg.com/pngimages/632/41/png-clipart-php-server-side-scripting-yii-web-application-scripting-language-others-miscellaneous-blue.png';


// EXO
    // créer un lien => href => $url
        // img  src => $image / alt => $text / width => $width
// 3 methodes

    // methode en alternance
    // tout en php
    // .=  => grace à l'opérateur combiné

?>

<a href="<?= $url; ?>">
    <img src="<?= $image; ?>" alt="<?= $text; ?>" width="<?= $width; ?>px">
</a>

<?php


echo '<a href="' . $url . '"><img src="'.$image.'" alt="'.$text.'" width="'.$width.'px"></a>';

