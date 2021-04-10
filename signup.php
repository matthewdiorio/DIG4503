<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'components/Head.php'; ?>
<?php include './components/MainNavigation.php'; 
      include './private/signup.php';

?>

<main>
    <div class="w3-container w3-content w3-mobile w3-auto">
        <div class="logo-container logo-center">
            <img class="logo-medium " src="./assets/logo/Standard.png" alt="" srcset="">
        </div>
        <?php include './components/FormSignUp.php'?>
    </div>
</main>
<?php include "./components/Footer.php";?>

