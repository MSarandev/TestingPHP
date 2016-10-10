<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SQL Query Generation</title>
</head>
<body>
<?php
//DEBUG HEADER
print('<p>ERRORS</p>');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
print('<hr>');
//-----------------------
/**
 * Created by PhpStorm.
 * User: 1406519
 * Date: 10/10/2016
 * Time: 14:02
 */
include("db_connect.php"); // INCLUDE THE CONNECTION FILE
?>
<hr>
<div>
    <?php
    // GENERATE SQL QUERIES
    print('<p>Query 1</p>');
    // Create the SQL query
    $sql_query = "SELECT * FROM marvelmovies";
    // Run the sql on the DB
    $res = mysqli_query($db_conn, $sql_query);
    // Fetch the result
    $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
    print($row);
    ?>
</div>
</body>
</html>