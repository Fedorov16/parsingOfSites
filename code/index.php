<?php

include_once ('Content.php');

//$url = 'https://www.paradrive.ru/catalog/paraplany/';
$url = 'https://google.com';

$new = new Content($url);
$new ->getImg();
echo $new->getContent();




