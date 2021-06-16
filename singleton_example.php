<?php
// NOTE: class Test is implemented as a "Singleton"
class Test
{
	protected static $instance = NULL;
	private function __construct(public array $config)
	{}
	public static function getInstance(array $config)
	{
		if (empty(self::$instance)) {
			self::$instance = new self($config);
		}
		return self::$instance;
	}
}

$arr = [1,2,3,4,5];
$alpha = ['A','B','C'];
$obj1 = Test::getInstance($arr);
$obj2 = Test::getInstance($alpha);

var_dump($obj1, $obj2);

try {
	$obj3 = new Test();
} catch (Throwable $t) {
	echo $t;
}
echo "\n";

