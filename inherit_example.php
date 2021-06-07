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
spl_autoload_register('func');

use Test\Entity\SpecialUser;
$user = new SpecialUser('Joe','Biden');
var_dump(get_object_vars($user));
echo $user->getToken();
$str = serialize($user);
echo "\n";
echo $str;
