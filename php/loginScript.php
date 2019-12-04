<?php
session_start();
include "env.php";

try{
    $pdo = new PDO('mysql:host='.getenv('DB_HOST').';dbname='.getenv("DB_NAME"), getenv("DB_USERNAME"), getenv("DB_PASSWORD") );
    if(isset($_POST['login']) && $_POST['password']){
        $login = $_POST['login'];
        $password = $_POST['password'];
        if($login=='admin' && $login=='admin'){
            die();
        }

        $query = "SELECT * FROM  `users` WHERE Username='$login' and Password='$password'";
        $stmt = $pdo->query($query);

        if($stmt->rowCount()>0){
            $_SESSION['connected']=true;
        }
        $stmt->closeCursor();


    }
}catch(PDOException $e){
    echo $e->getMessage();
}


header('Location: ../index.php');


/** TODO DB Connection */
