<?php
$payments = [];
$interval = new DateInterval('P1M');
$today    = new DateTime('now');
for ($x = 0; $x < 12; $x++) {
	// all PHP object assignments are by reference!
	// this doesn't work:
	// $payments[] = $today;
	$payments[] = clone $today;
	$today->add($interval);
}
foreach ($payments as $item) {
	echo $item->format('Y-m-d');
	echo "\n";
}

var_dump($payments);
