<?php
 $baseURI = '/www/foodex/';
 $pageName = $_SERVER['PHP_SELF'];
 echo $pageName;
 switch (strtolower($pageName)){
     case $baseURI.'application.php':
         echo ' <link rel="stylesheet" href="./styles/application.css">';
         echo '<title>New Application</title>';
         break;
     case $baseURI.'signup.php':
         echo ' <link rel="stylesheet" href="./styles/signup.css">';
         echo '<title>Sign Up</title>';
         break;
     case  $baseURI.'login.php':
         echo ' <link rel="stylesheet" href="./styles/signin.css">';
         echo ' <link rel="stylesheet" href="./styles/form.css">';
         echo '<title>Log In</title>';
         break;
     case  $baseURI.'dashboard.php':
         echo ' <link rel="stylesheet" href="./styles/dashboard.css">';
         echo '<title>Dashboard</title>';
         break;    
     case  $baseURI.'search.php':
         echo ' <link rel="stylesheet" href="./styles/search.css">';
         echo '<title>Search Banks</title>';
         break;    
     case  $baseURI.'insert.php':
         echo ' <link rel="stylesheet" href="./styles"/>';
         echo '<title>Insert Title</title>';
         break;    
     default: 
         echo '<title>FoodEx</title>';
         break;
 }
?>