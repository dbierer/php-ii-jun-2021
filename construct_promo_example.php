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

use Test\Entity\Geoname;
$name = new Geoname('ES','ESP','724','SP','Spain','Madrid','504782','46723749','EU','.es','EUR','Euro','34','#####','^(\d{5})$','es-ES,ca,gl,eu,oc','2510769','AD,PT,GI,FR,MA');
var_dump($name->getArrayCopy());

