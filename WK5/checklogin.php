<?php

$user = $_POST["txt_user"];
$pass = $_POST["txt_pass"];

if($user == "username" && $pass == "password"){
    setcookie('access_level_cookie', 'standard_user');
}

header('Location : loggedin.php');
?>