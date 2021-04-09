<?php 
require "../private/autoload.php";

if(isset($_SESSION['url_address'])){
    session_destroy();
}

header("Location: index.php");
?>