<?php
$host = "mysql_db";
$user = "root";
$pass = "root";
$db = "mysql";

try {
	$db = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
}catch(PDOException $e) {
	echo $e->getMessage();
}

?>