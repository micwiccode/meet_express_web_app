<?php

include 'php/env.local.php';

try {
	$pdo = new PDO('mysql:host='.getenv('DB_HOST'), getenv("DB_USERNAME"), getenv("DB_PASSWORD") );
	$query = 'DROP DATABASE meetexpress';
	$pdo->prepare($query)->execute();
	echo 'Drop successful';
}catch(PDOException $exception){
	echo $exception->getMessage();
}

