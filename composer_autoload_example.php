<?php
define('BASE_DIR', __DIR__);
include __DIR__ . '/vendor/autoload.php';

use Test\Entity\User;
use Test\Service\DoNothing;
use PHPMailer\PHPMailer\PHPMailer;

$user[] = new User('Fred', 'Flintstone');
$user[] = new User('Wilma', 'Flintstone');
$nothing = new DoNothing($user[0]);
echo $nothing->getFullName();
// this is not allowed: it's marked "Protected"
//$user->firstName = 'Betty';
// Fatal Error: cannot use $this outside of class context
// echo $this->firstName;
var_dump($user);

$mail = new PHPMailer();
var_dump($mail);
