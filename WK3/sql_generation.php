<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SQL Query Generation</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: 1406519
 * Date: 10/10/2016
 * Time: 14:02
 */
include("db_connect.php"); // INCLUDE THE CONNECTION FILE

// Check for connection issues
if($db_conn->connect_error){
    die('CONNECTION FAILED ->'.$db_conn->connect_error);
}else{
    print('<p>Connection Established</p>');
}

?>
</body>
</html>