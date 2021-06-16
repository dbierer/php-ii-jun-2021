<?php
class Test
{
	public $token = '';
	public function __construct()
	{
		$this->getToken();
	}
	public function __clone()
	{
		$this->__construct();
		// OR, just call getToken() here!
	}
	public function getToken()
	{
		$this->token = bin2hex(random_bytes(8));
	}
}

$test1 = new Test();
$test2 = clone $test1;
var_dump($test1, $test2);
