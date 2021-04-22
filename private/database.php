<?php 
define('DB_NAME', 'foodEx');
define('DB_USER', 'root');
// on yjang's system
//define('DB_PASS', '');
define('DB_PASS', 'root');
define('DB_HOST', 'localhost');


$string = "mysql:host=".DB_HOST.";dbname=".DB_NAME."";
if(!$connection = new PDO($string, DB_USER, DB_PASS)){
    die("Failed to connect");
}


?>
