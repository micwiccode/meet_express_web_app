<?php
include "env.php";
try{
    $pdo = new PDO('mysql:host'.getenv("DB_HOST").';dbname='.getenv("DB_NAME"), getenv("DB_USERNAME"), getenv("DB_PASSWORD"));
    echo "Jest git";
}catch (PDOException $e){
    echo "Nie jest git";
    echo $e->getMessage();
}


// Create connection
$conn = mysqli_connect(getenv("DB_HOST"), getenv("DB_USERNAME"), getenv("DB_PASSWORD"));

// Check connection
if (!$conn) {
    echo "Connection failed: " . mysqli_connect_error();
}
echo "Connected successfully";
/** TODO DB Connection */
