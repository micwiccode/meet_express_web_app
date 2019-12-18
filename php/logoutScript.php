<?php
session_start();
unset($_SESSION["logged"]);
unset($_SESSION["message"]);
unset($_SESSION["userName"]);

$config = ["backColor" => "#fff", "fontColor" => "#000", "fontFamily" => "'Montserrat', sans-serif"];
$config = (serialize($config));
setcookie('configure', $config, time() + 3600, '/');
unset($_COOKIE["configure"]);

header('Location: ../index.php');
