<?php
$vars = [
    "DB_PASSWORD" => "#1@chG@12#4PB3$",
    "DB_USERNAME" => "starosta_meetexpress",
    "DB_HOST" => "195.78.66.4",
    "DB_NAME" => "starosta_meetexpress",
];

foreach ($vars as $key => $var){
    putenv("$key=$var");
}
