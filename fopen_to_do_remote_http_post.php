<?php
// example of using fopen() to post data to a remote site
$opts = array(
	'http' => array (
		'method'  => "POST",
		'header'  => "Accept-language: en\r\n"
					. "Content-type: application/x-www-form-urlencoded\r\n",
		'content' => http_build_query(array('foo'=>'bar'))
	)
);
$context = stream_context_create($opts);
$fp = fopen('https://www.example.com', 'r', false, $context);
