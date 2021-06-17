<?php
session_start();
$expires = $_SESSION['expires'] ?? 0;
// If we have the key, and therefore an etag, and
// it is less the the stored expiration time
if (isset($_SERVER['HTTP_IF_NONE_MATCH'])
    && $expires !== 0
    && $_SERVER['HTTP_IF_NONE_MATCH'] < $_SESSION['expires']) {
    // We don't need to do anything except send a 'Not modified' header and exit
    header('Not Modified', true, 304);
    exit();
}
 
// No etag header, create one for this page
$current = time(); // Current time
$oneWeek  = $current - 6.048E+2; // 1 week earlier in seconds
$duration = 2.628e+6; // 1 month in seconds
$etag = $current - $oneWeek;
$_SESSION['etag']= $etag;
$expires = $current + $duration;
$_SESSION['expires']= $expires;
 
header('Expires: ' . gmdate ("D, d M Y H:i:s", $expires) . " GMT");
header('Last-Modified: ' . gmdate ("D, d M Y H:i:s", $current) . " GMT");
header("ETag: $etag");
header("Pragma: cache");
header("Cache-Control: public, must-revalidate, max-age=0");

for ($y = 0; $y < 120; $y++) {
	for ($x = 0; $x < 80; $x++) {
		echo '*';
	}
	echo '<br />';
}
echo "ETag: $etag\n";
