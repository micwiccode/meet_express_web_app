<?php
const DB_PASSWORD = '';
const DB_USERNAME = 'root';
const DB_HOST = 'localhost';
const DB_NAME = "meetexpress";
$vars = [
    "DB_PASSWORD" => DB_PASSWORD,
    "DB_USERNAME" => DB_USERNAME,
    "DB_HOST" => DB_HOST,
    "DB_NAME" => DB_NAME,
];

foreach ($vars as $key => $var){
    putenv("$key=$var");
}
