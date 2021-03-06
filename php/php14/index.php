<?php

require('vendor/autoload.php');

use Respect\Validation\Validator as v;
use JasonGrimes\Paginator;


$number = 145;
echo v::numericVal()->validate($number); // true


$totalItems = 100;
$itemsPerPage = 10;
$currentPage = 8;
$urlPattern = '/foo/page/(:num)';

$paginator = new Paginator($totalItems, $itemsPerPage, $currentPage, $urlPattern);

?>

<html>
<head>
    <!-- The default, built-in template supports the Twitter Bootstrap pagination styles. -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>

<?php
// Example of rendering the pagination control with the built-in template.
// See below for information about using other templates or custom rendering.

echo $paginator;
?>

</body>
</html>
