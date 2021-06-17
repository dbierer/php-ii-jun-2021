<?php
$str = 'The quick brown fox jumped over the fence';
$ptn = '/fox/S';
$max = 1_000_000;

$start1 = microtime(TRUE);
for ($x = 0; $x < $max; $x++) {
	preg_match($ptn, $str);
}
$diff1 =  microtime(TRUE) - $start1;
$start2 = microtime(TRUE);
for ($x = 0; $x < $max; $x++) {
	str_contains($str, 'fox');
}
$diff2 =  microtime(TRUE) - $start2;

echo "Elapsed time: $diff1\n";
echo "Elapsed time: $diff2\n";


