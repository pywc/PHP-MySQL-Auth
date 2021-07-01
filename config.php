<?php
// Assuming DB name is 'auth'
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'SOME_USERNAME');
define('DB_PASSWORD', 'SOME_PASSWORD');
define('DB_NAME', 'auth');
 
// Connect to DB
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
