<?php

require 'SimpleDOM.php';

$duplicates = 30000;
$thing = simpledom_load_string(file_get_contents('template.xml'));

for ($counter = 1; $counter <= $duplicates; $counter++) {
	$new = $thing->appendChild($thing->customer->cloneNode(true));
	$new['customer-no'] = date('mdHis') . $counter;
	$new->credentials->login = date('MHi') . '+' . $counter . '@null.com';
}

echo $thing->asXML();
