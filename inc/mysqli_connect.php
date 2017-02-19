<?php 

define('DB_USER', 'root');
define('DB_PASSWORD', '7W5b4Sit');
// define('DB_PASSWORD', '674e07d6c8');
define('DB_HOST', 'localhost:3306');
define('DB_NAME', 'luoshen');

$dbc = mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to   MySQL: ' . mysqli_connect_error() ); 

mysqli_set_charset($dbc, 'utf8');

?>
