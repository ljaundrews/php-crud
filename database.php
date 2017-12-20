<?php
// used to connect to the database
$host = "localhost";
$db_name = "php_beginner_crud_level_1";
$username = "root";
$password = "";

try {
	$con = new PDO("mysqli:host={$host};dbname={$db_name}", $username, $password);
}

// show error
catch(PDOExeption $exception) {
	echo "Connection error: " . $exception->getMessage();
}
?>