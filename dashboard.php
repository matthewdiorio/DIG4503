<?php include 'components/Head.php'; ?>

<?php include './components/MainNavigation.php'; ?>

<?php 
    $userType = 'patron';
    if($userType == 'patron'){
        ?> 
        
<main class="dashboard">
    <div class="w3-row  w3-mobile">
        <div class="w3-half  w3-mobile">
            <div class=" w3-section">
                
                <div class="w3-margin-left w3-center">
                    <h2>Hello <?php 
                    if(!isset($full_name)){
                        echo 'Default User';
                    }?></h2>
                </div>
                <div class="w3-auto applications w3-auto w3-xlarge w3-light-grey w3-round w3-border w3-center w3-section"> Applications Status</div>

            </div>
        </div>
        <div class="w3-half w3-mobile">
            <div class=" w3-section">
                <div class="w3-auto sidebar w3-auto w3-xlarge w3-light-grey w3-round w3-border w3-center w3-section">Food Banks</div>
            </div>
        </div>

    </div>
    <div class="w3-auto profile w3-margin-top profile-user w3-mobile  w3-light-grey w3-round w3-border  w3-center">Edit Profile</div>

</main>
        <?php
    }
    echo "Must only be accessible after login/signin.
    <br> Use session cookes.";
?>

<?php include "./components/Footer.php";?>
