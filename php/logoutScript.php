<?php
session_start();
unset($_SESSION["logged"]);
unset($_SESSION["message"]);
unset($_SESSION["userName"]);
header('Location: ../index.php');
