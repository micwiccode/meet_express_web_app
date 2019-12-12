<?php 
  if(!isset($_COOKIE['notFirstUse'])){
    setcookie('notFirstUse', true, time()+3600*24,  '/');
  }
header('Location: ../index.php');

