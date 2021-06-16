<?php
$dsn = 'mysql:dbname=phpcourse;host=localhost';
$usr = 'vagrant';
$pwd = 'vagrant';
$opts = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
$rand = function () { 
	$alpha = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$name  = $alpha[rand(0,25)]
			. $alpha[rand(0,25)]
			. $alpha[rand(0,25)]
			. $alpha[rand(0,25)];
	return $name;
};
try {
	$count = 0;
	$pdo = new PDO($dsn, $usr, $pwd, $opts);
	$result = $pdo->prepare('INSERT INTO customers (firstname, lastname) VALUES (:first, :last)');
	for ($x = 0; $x < 6; $x++) {
		$fname = $rand();
		$lname = $rand() . $x . $x . $x;
		$result->execute([':first' => $fname, ':last' => $lname]);
		$count += $result->rowCount();
	}
	echo "Total of $count rows were inserted\n";
	echo ($count === 6) ? "Success\n" : "Oops\n";
} catch (Throwable $t) {
	echo $t;
}
echo "\n";
