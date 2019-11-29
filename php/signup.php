<?php
$login = $_POST['login'];
$password = $_POST['password'];
$login = preg_replace('/\s\s+/', ' ', $login);
if (preg_match('^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$', $password)){
	echo '';
}
/** TODO DB new user */

