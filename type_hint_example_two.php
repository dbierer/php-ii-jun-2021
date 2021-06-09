<?php
class Test
{
	public function loopy(array|Traversable $arr)
	{
		$out = '';
		foreach ($arr as $item) $out .= $item . "\n";
		return $out;
	}
	public function math(int|float $a, int|float $b)
	{
		return $a + $b;
	}
}

$test = new Test;
$arr = ['A','B','C'];
echo $test->loopy($arr);
echo $test->loopy(new ArrayIterator($arr));
echo $test->math(111, 222.222);
