<?php

if(isset($_SESSION['logged'])){
    include 'headerForLogged.php';
}
else{
    include 'headerForGuest.php';
}