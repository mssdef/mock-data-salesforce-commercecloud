<?php

require 'SimpleDOM.php';

$duplicates = 300;
$thing = simpledom_load_string(file_get_contents('template-orders.xml'));

for ($counter = 1; $counter <= $duplicates; $counter++) {
  $orderId = "CRO" . date('mdHis') . $counter;

	$new = $thing->appendChild($thing->order->cloneNode(true));
	$new['order-no'] = $orderId;
	$new->{'order-date'} = date('Y-m-d\TH:i:s.000\Z');

	//$new = $thing->appendChild($thing->{'category-assignment'}->cloneNode(true));
	//$new['product-id'] = $productId;
}

echo $thing->asXML();
