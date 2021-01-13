<?php
define('DB_SERVER', '$Server name%');
define('DB_USERNAME', '%user name%');
define('DB_PASSWORD', '%DB Password%');
define('DB_NAME', '%DB name%');
$currency = '₹';
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$mysqli = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>