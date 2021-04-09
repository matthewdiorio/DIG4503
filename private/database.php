<?php 
define('DB_NAME', 'login');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_HOST', 'localhost');


$string = "mysql:host=".DB_HOST.";dbname=".DB_NAME."";
if(!$connection = new PDO($string, DB_USER, DB_PASS)){
    die("Failed to connect");
}


?>
