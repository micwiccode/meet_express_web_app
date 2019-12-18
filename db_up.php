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
				password varchar(30) not null,
				name varchar(50),
				surname varchar (50),
				sex varchar (1),
				email varchar (100),
				age int(2),
				phone varchar (11)
				)";
	$pdo->exec($query);
	$insert = "INSERT INTO users(username, password, name, surname, sex, email, age, phone) values ('admin', 'admin1', 'Jan', 'Kowalski', 'm', 'jan.kowaalski@email.com', 45, '123 456 789');
               INSERT INTO users(username, password) values ('psw', 'Haslo123');
               INSERT INTO users(username, password, name, surname, sex, email, age) values ('Maciek', 'qwerty123', 'Maciek', 'Bartosik', 'm', 'maciek@bartosik.wtf', 21);
               INSERT INTO users(username, password, name, surname, sex, email, age, phone) values ('Michal', 'testtest1', 'Michał', 'Wiczk', 'm', 'm.wiczk@gmail.com', 21, '987 654 321')";
	$pdo->exec($insert);
	echo "Tables created";

}catch (PDOException $exception){
	echo $exception->getMessage();
}
