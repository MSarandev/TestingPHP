<?php
/**
 * DATABASE CONNECT SCRIPT
 *
 * Created by PhpStorm.
 * User: 1406519
 * Date: 10/10/2016
 * Time: 13:38
 */

define('DB_SERVER', 'eu-cdbr-azure-north-e.cloudapp.net');
define('DB_USER', 'b214ab9683081c');
define('DB_PASS', 'c0fcd14a');
define('DB_DB1', 'ms8080');

$db_conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_DB1);
?>