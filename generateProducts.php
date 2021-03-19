<?php

require 'SimpleDOM.php';

$duplicates = 30000;
$thing = simpledom_load_string(file_get_contents('template-products.xml'));

for ($counter = 1; $counter <= $duplicates; $counter++) {
  $productId = "CDP" . date('mdHis') . $counter;

	$new = $thing->appendChild($thing->product->cloneNode(true));
	$new['product-id'] = $productId;

	//$new = $thing->appendChild($thing->{'category-assignment'}->cloneNode(true));
	//$new['product-id'] = $productId;
}

echo $thing->asXML();
