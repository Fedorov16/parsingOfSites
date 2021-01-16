<?php

include './simplehtmldom/simple_html_dom.php';

$html = file_get_html('http://google.com');

// Find all links
foreach($html->find('a') as $element)
    echo $element->href . '<br>';

