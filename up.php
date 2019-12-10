<?php
include 'php/env.local.php';
try{
	$pdo = new PDO('mysql:host='.getenv('DB_HOST'), getenv("DB_USERNAME"), getenv("DB_PASSWORD") );
	$query = "CREATE DATABASE ".getenv("DB_NAME");
	$pdo->exec($query);
	echo "Database installed \n";
	$pdo = null;
}catch(PDOException $e){
	echo $e->getMessage();
}

try{
	$pdo = new PDO('mysql:host='.getenv('DB_HOST').';dbname='.getenv("DB_NAME"), getenv("DB_USERNAME"), getenv("DB_PASSWORD") );
	$query = "CREATE TABLE users (
				id INT(6) AUTO_INCREMENT PRIMARY KEY,
				username varchar(30) not null,
				password varchar(30) not null
				)";
	$pdo->exec($query);
	$insert = "INSERT INTO users(username, password) values ('admin', 'admin1')";
	$pdo->exec($insert);
	echo "Tables created";

}catch (PDOException $exception){
	echo $exception->getMessage();
}
