<?php
// If this is not enabled, scalar data type hints do a type cast
// Everything's OK unless the type cast fails (e.g. non-numeric string to numeric)
declare(strict_types=1);
class Test
{
	public function math(int $a, int $b) : int
	{
		return $a + $b;
	}
}

$test = new Test;
echo $test->math(111, 222.222);
echo $test->math(111, '222');
echo $test->math(111, ' 222 ');
