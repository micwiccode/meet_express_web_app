<?php
session_start();
include 'env.php';
$isValid = true;

$inputs = array("name" =>$_POST['user_name'], "surname"=> $_POST['user_surname'],
 "email" => $_POST['user_email'], "age" =>$_POST['user_age'], "month" => $_POST['user_month'], "phone"=>$_POST['user_phone']);

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

if($isValid){
  session_start();
  header('Location: ../signupNextPage.php');
}
else{
  $_SESSION["messageSign"] = $message;
  header('Location: ../signup.php');
} 



