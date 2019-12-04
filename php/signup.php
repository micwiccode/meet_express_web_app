<?php
session_start();
include 'env.php';
$username = $_POST['user_name'];
$password = (string)$_POST['user_password'];
$password_rpt = (string)$_POST['user_password_repeat'];
$username = preg_replace('/\s\s+/', ' ', $username);
if (preg_match('^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$^', $password) && $password == $password_rpt) {
    try {
        $pdo = new PDO('mysql:host=' . getenv('DB_HOST') . ';dbname=' . getenv("DB_NAME"), getenv("DB_USERNAME"), getenv("DB_PASSWORD"));
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "INSERT INTO `users`(`Username`, `Password`) VALUES ('$username','$password')";
        $count = $pdo->exec($query);
        if($count>0){
            $_SESSION['connected']=true;
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

header('Location: ../index.php');

/** TODO DB new user */

