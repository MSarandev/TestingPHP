<?php
/**
 * DATABASE CONNECT SCRIPT
 *
 * Created by PhpStorm.
 * User: 1406519
 * Date: 10/10/2016
 * Time: 13:38
 */

//DEBUG HEADER
print('<p>ERRORS (if any):</p>');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
print('<hr>');
//-----------------------

define('DB_SERVER', 'eu-cdbr-azure-north-e.cloudapp.net');
define('DB_USER', 'b214ab9683081c');
define('DB_PASS', 'c0fcd14a');
define('DB_DB1', 'ms8080');

$db_conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_DB1);

// test if connection was established, and print any errors
if($db_conn->connect_errno){
    die('<p>CONNECT FAILED -> '.$db_conn->connect_error);
}else{
    print('<p>Connection Established</p>');
}
?> 