<?php
if(session_status()!=PHP_SESSION_ACTIVE){
    session_start();
}
include 'env.local.php';
$user = null;
try{
    $pdo = new PDO('mysql:host='.getenv('DB_HOST').';dbname='.getenv("DB_NAME"), getenv("DB_USERNAME"), getenv("DB_PASSWORD") );

        $name = $_SESSION['userName'];
        $query = "SELECT * FROM  `users` WHERE Username='$name'";
        $stmt = $pdo->query($query);
        $user = $stmt->fetch();


}catch(PDOException $e){
    echo $e->getMessage();
    die();
}
