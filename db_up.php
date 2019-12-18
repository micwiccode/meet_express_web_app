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
				username varchar(30) not null unique ,
				password varchar(30) not null,
				name varchar(50),
				surname varchar (50),
				sex varchar (1),
				email varchar (100),
				age int(2),
				phone varchar (11)
				);
				CREATE TABLE events (
				id int(6) AUTO_INCREMENT PRIMARY KEY,
				title varchar (50) not null,
				date varchar(20) not null,
				place varchar (50) not null ,
				membersActual int(6),
				membersMax int(6) not null
				)";
	$pdo->exec($query);
	$insert = "INSERT INTO users(username, password, name, surname, sex, email, age, phone) values ('admin', 'admin1', 'Jan', 'Kowalski', 'm', 'jan.kowaalski@email.com', 45, '123 456 789');
               INSERT INTO users(username, password) values ('psw', 'Haslo123');
               INSERT INTO users(username, password, name, surname, sex, email, age) values ('Maciek', 'qwerty123', 'Maciek', 'Bartosik', 'm', 'maciek@bartosik.wtf', 21);
               INSERT INTO users(username, password, name, surname, sex, email, age, phone) values ('Michal', 'testtest1', 'Michał', 'Wiczk', 'm', 'm.wiczk@gmail.com', 21, '987 654 321');
               INSERT INTO events(title, date, place, membersActual, membersMax) values ('Trip in mountains','18.12.2019', 'Pwr', 1, 16);
               INSERT INTO events(title, date, place, membersActual, membersMax) values ('LOL Tournament','10.12.2019', 'Online', 5, 10)";

	$pdo->exec($insert);
	echo "Tables created";

}catch (PDOException $exception){
	echo $exception->getMessage();
}
