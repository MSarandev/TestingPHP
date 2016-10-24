<?php
session_start();
$accessLVL = $_COOKIE['access_level_cookie'];

echo "<p>Access Panel</p>";

disInfo('access_level_cookie');

function disInfo($accessLVL){
    if($accessLVL == 'standard_user'){
        echo "<p style = 'background-color: lightgreen;'>Access Level: Standard User</p>";

    }elseif ($accessLVL == 'root'){
        echo "<h1>Welcome, <strong>root</strong></h1>";
        echo "<p style = 'background-color: red;color: white;'>Admin things</p>";
    }
}
?>