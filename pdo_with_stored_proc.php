<?php
$dsn = 'mysql:dbname=phpcourse;host=localhost';
$usr = 'vagrant';
$pwd = 'vagrant';
$opts = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
$lname = 'Chu';
try {
	$pdo = new PDO($dsn, $usr, $pwd, $opts);
	$result = $pdo->query("CALL listCustomer('$lname')");
	$result->setFetchMode(PDO::FETCH_CLASS, 'ArrayObject');
	$total = $result->rowCount();
	echo "Total of $total hits were received\n";
	if ($total) {
		while ($row = $result->fetch())
			var_dump($row);
	}
} catch (Throwable $t) {
	echo $t;
}
echo "\n";
