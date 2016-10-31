<?php
session_start();
$accessLVL = $_COOKIE['access_level_cookie'];

echo "<p>Access Panel</p>";

function disInfo($accessLVL){
    if($accessLVL == 'standarduser'){
        echo "<p>1</p>";

    }elseif ($accessLVL == 'root'){
        echo "<p>root</p>";
    }
}

disInfo($accessLVL);
?>