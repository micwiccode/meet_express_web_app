<?php
include 'env.local.php';
try{
    $pdo = new PDO('mysql:host=' . getenv('DB_HOST') . ';dbname=' . getenv("DB_NAME"), getenv("DB_USERNAME"), getenv("DB_PASSWORD"));
    $query = "SELECT * FROM events";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll();
    echo json_encode($data);
}catch(PDOException $e){
    echo $e->getMessage();
}
