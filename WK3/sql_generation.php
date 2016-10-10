<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SQL Query Generation</title>
</head>
<body>
<?php
//DEBUG HEADER
print('<p>ERRORS (if any):</p>');
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
print('<strong>Server Conn. Stat.</strong>');
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
    $res = $db_conn->query($sql_query);
    // Check if the res is null
    if ($res->num_rows > 0){
        echo $res;
    }else{
        print('<p>Query returned 0 rows</p>');
    }
    ?>
</div>
</body>
</html>