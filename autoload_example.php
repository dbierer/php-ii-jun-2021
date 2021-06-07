<?php
define('BASE_DIR', __DIR__);
// anon func
function func($class) 
{
	$fn = BASE_DIR 
		. '/' 
		. str_replace('\\', '/', $class) 
		. '.php';
	require $fn;
}
// anon func
$func = function($class) {
	$fn = BASE_DIR 
		. '/' 
		. str_replace('\\', '/', $class) 
		. '.php';
	require $fn;
};
// class that defines __invoke()
$anon = new class () {
	public function __invoke($class) 
	{
		$fn = BASE_DIR 
			. '/' 
			. str_replace('\\', '/', $class) 
			. '.php';
		require $fn;
	}
};

spl_autoload_register('func');
spl_autoload_register($func);
spl_autoload_register($anon);

use Test\Entity\User;
use Test\Service\DoNothing;

$user[] = new User('Fred', 'Flintstone');
$user[] = new User('Wilma', 'Flintstone');
$nothing = new DoNothing($user[0]);
echo $nothing->getFullName();
// this is not allowed: it's marked "Protected"
//$user->firstName = 'Betty';
// Fatal Error: cannot use $this outside of class context
// echo $this->firstName;
var_dump($user);
