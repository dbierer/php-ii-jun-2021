<?php
$data = ['https://zend.com', 'http://php.net/preg_match', 'ftp://ftp.whatever.com/some/path/to/whatever'];
$ptn  = '!^(http|https|ftp)://(.*?)(/.*)?$!';

foreach ($data as $str) {
	echo preg_match($ptn, $str, $matches) ? 'MATCH' : 'NO MATCH';
	echo "\n";
	var_dump($matches);
}

// alternative:
foreach ($data as $str) {
	$matches = parse_url($str);
	var_dump($matches);
}
