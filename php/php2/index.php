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

<a href="<?= $url; ?>" target="_blank">
    <img src="<?= $image; ?>" alt="<?= $text; ?>" width="<?= $width; ?>px">
</a>

<?php

echo '<a href="' . $url . '" target="_blank">
<img src="'.$image.'" alt="'.$text.'" width="'.$width.'px">
</a>';

$h = '<a href="'.$url.'" target="_blank">';
    $h .= '<img src="'.$image.'" alt="'.$text.'" width="'.$width.'px">';
$h .= '</a>';
echo $h;


$fruits = array('Banane','Kiwi','Papaye','Tomate');
echo '<pre>';
print_r($fruits);
echo '</pre>';

echo $fruits[1];

// ul li
// 3 methodes => concaténation pour créer une liste ul li
// methode en alternance
?>
<ul>
    <li><?php echo $fruits[0]; ?></li>
    <li><?php echo $fruits[1]; ?></li>
    <li><?php echo $fruits[2]; ?></li>
    <li><?php echo $fruits[3]; ?></li>
</ul>
<?php
// tout en php
echo '<ul><li>' . $fruits[0] . '</li><li>' . $fruits[1] . '</li><li>' . $fruits[2] . '</li><li>' . $fruits[3] . '</li></ul>';
// .=  => grace à l'opérateur combiné
$html = '<ul>';
    $html .= '<li>'.$fruits[0].'</li>';
    $html .= '<li>'.$fruits[1].'</li>';
    $html .= '<li>'.$fruits[2].'</li>';
    $html .= '<li>'.$fruits[3].'</li>';
$html .= '</ul>';







