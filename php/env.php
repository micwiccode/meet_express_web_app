<?php
const DB_PASSWORD = "#1@chG@12#4PB3$";
const DB_USERNAME = "starosta_meetexpress";
const DB_HOST = "starosta.vot.pl";
const DB_NAME = "starosta_meetexpress";
$vars = [
    "DB_PASSWORD" => DB_PASSWORD,
    "DB_USERNAME" => DB_USERNAME,
    "DB_HOST" => DB_HOST,
    "DB_NAME" => DB_NAME,
];

foreach ($vars as $key => $var){
    putenv("$key=$var");
}
