<?php
session_start();
include 'env.local.php';
$isValid = true;
$inputs = array("name" =>quotemeta($_POST['user_name']), "surname"=> quotemeta($_POST['user_surname']),
 "email" => $_POST['user_email'], "age" =>quotemeta($_POST['user_age']), "phone"=>quotemeta($_POST['user_phone']), "sex"=>quotemeta($_POST['user_sex']));

foreach($inputs as $key => $value){
  $value = preg_replace('/\s\s+/', ' ', $value);
  if(empty($value)){
    $isValid = false;
    $message = "Fill in all values";
    break;
  } 
}

if($isValid){
  if ((preg_match('~[0-9]+~', $inputs["name"]) || preg_match('~[0-9]+~', $inputs["surname"]))) {
    $isValid = false;
    $message = "Put a valid (sur)name with no numbers";
  }
  if (!filter_var($inputs["email"], FILTER_VALIDATE_EMAIL)) {
    $isValid = false;
    $message .= "\r\nPut a valid email address";
  }
  if (!filter_var($inputs["age"], FILTER_VALIDATE_INT)) {
    $isValid = false;
    $message .= "\r\nPut a valid age";
  }
  if (!isset($_POST["user_sex"])) {
    $message .= "\r\nPlease choose your sex";
  } 
  if(strlen(preg_replace("/[^0-9]/", "",$inputs["phone"])) < 9){
    $isValid = false;
    $message .= "\r\nPut a valid phone number";
  }
}

try{
    $pdo = new PDO('mysql:host='.getenv('DB_HOST').';dbname='.getenv("DB_NAME"), getenv("DB_USERNAME"), getenv("DB_PASSWORD") );
    $name = $_SESSION['userName'];
    $query = "UPDATE users SET name=:name, surname=:surname, sex=:sex, email=:email, age=:age, phone=:phone WHERE username='$name'";
    $stmt = $pdo->prepare($query);
    $stmt->execute($inputs);
    $pdo = null;

}catch(PDOException $e){
    echo $e->getMessage();
}

if($isValid){
  session_start();
  header('Location: ../index.php');
}
else{
  $_SESSION["messageSign"] = $message;
  header('Location: ../userData.php');
} 



