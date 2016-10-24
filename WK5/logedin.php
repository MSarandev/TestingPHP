<?php
session_start();
$accessLVL = $_COOKIE['access_level_cookie'];

displayAccessLevelInformation($accessLVL);

function displayAccessLevelInformation($accessLVL){
    if($accessLVL == 'standard_user'){
        echo "<p style = 'background-color: lightgreen;'>Access Level: Standard User</p>";

    }elseif ($accessLVL == 'root'){
        echo "<h1 style = 'background-color: red;color: white;'>Welcome, <strong>root</strong></h1>";
        echo "<p style = 'background-color: red;color: white;'>Admin things</p>";
    }
}
?>