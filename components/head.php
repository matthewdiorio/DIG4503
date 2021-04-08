<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.css">
    <link rel="stylesheet" href="./styles/w3.css">
    <link rel="stylesheet" href="./styles/styles.css">    
    <link rel="shortcut icon" href="./assets/logo/Favicon.png" type="image/x-icon">
    <?php
        $pageName = $_SERVER['PHP_SELF'];
        echo $pageName;
        switch ($pageName){
            case '/www/foodEx/application.php':
                echo ' <link rel="stylesheet" href="./styles/application.css">';
                echo '<title>New Application</title>';
                break;
            case '/www/foodEx/signup.php':
                echo ' <link rel="stylesheet" href="./styles/signup.css>';
                echo '<title>Sign Up</title>';
                break;
            case  '/www/foodEx/signin.php':
                echo ' <link rel="stylesheet" href="./styles/signin.css>';
                echo '<title>Sign In</title>';
                break;
            case  '/www/foodEx/dashboard.php':
                echo ' <link rel="stylesheet" href="./styles/dashboard.css>';
                echo '<title>Dashboard</title>';
                break;    
            case  '/www/foodEx/search.php':
                echo ' <link rel="stylesheet" href="./styles/search.css>';
                echo '<title>Search Banks</title>';
                break;    
            case  '/www/foodEx/insert.php':
                echo ' <link rel="stylesheet" href="./styles/>';
                echo '<title>Insert Title</title>';
                break;    
            default: 
                echo '<title>FoodEx</title>';
                break;
        }
    ?>
    

</head>
