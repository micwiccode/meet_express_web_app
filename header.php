<?php

echo isset($_SESSION['connected']);
if(isset($_SESSION['connected'])){
    include 'headerForLogged.php';
}
else{
    include 'headerForGuest.php';
}