<?php
$data = [
	['Fred','Flintstone'],
	['Wilma','Flintstone'],
	['Barney', 'Rubble'],
	['Betty', 'Rubble'],
];
$barney = &$data[2][0];
$barney = 'Bam Bam';
var_dump($data);
