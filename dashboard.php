<?php include 'components/Head.php'; ?>

<?php include './components/MainNavigation.php'; ?>

<?php 
    $userType = 'patron';
    if($userType == 'patron'){
      
        $foodEvents = [
            {
                key: 1,
                photo: 'https://media-exp1.licdn.com/dms/image/C510BAQHlfm7KULdsBw/company-logo_200_200/0/1519889798320?e=2159024400&v=beta&t=TJS-PtLIAtwNCAA8Y799ggeWacedLqqhnWOXoWnFrrE',
                name: 'Knights Helping Knights Pantry',
                day:3,
                startTime:1000,
                endTime:1700,
                address:'4133 Pyxis Ln, Orlando, FL 32816'
            },
            {
                key: 2,
                photo: 'https://iscf.org/wp-content/uploads/2017/04/cropped-new-logo-1.png',
                name: 'Seeds of Paradise Food Pantry',
                day:2,
                startTime:1100,
                endTime:1500,
                address:'1460 N. Goldenrod Road Suite 105 Orlando, FL, 32807'
            },
            {
                key: 3,
                photo: 'https://cflcc.org/wp-content/uploads/2015/05/Catholic-Charities-logo.png',
                name: 'Food Distribution Center - Semoran Food Pantry',
                day:1,
                startTime:830,
                endTime:1230,
                address:'1771 N Semoran Blvd, Orlando, FL 32807'
            },
            {
                key: 4,
                photo: 'https://cflcc.org/wp-content/uploads/2015/05/Catholic-Charities-logo.png',
                name: 'Food Distribution Center - Semoran Food Pantry',
                day:1,
                startTime:900,
                endTime:1800,
                address:'1771 N Semoran Blvd, Orlando, FL 32807'
            }
        ];


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
                <div class="w3-auto applications w3-auto  w3-light-grey w3-round w3-border w3-center w3-section"> 
                
                Applications Status
                </div>

            </div>
        </div>
        <div class="w3-half w3-mobile">
            <div class=" w3-section">
                <div class="w3-auto sidebar  w3-center w3-section">
                <?php 
                    if(count($foodEvents) > 0){
                        $len_events = count($foodEvents);
                        for ($i = 0; i < $len_events; i++){
                            ?>
                            <div class="w3-card">
                                <div class="w3-bar">
                                    <img class="w3-image w3-mobile" src="<?php echo $foodEvents[$i].photo; ?>"/>
                                </div>
                            </div>
                            <?php
                        }
                    }
                ?>
                </div>
            </div>
        </div>

    </div>
    <div class="w3-row w3-auto profile profile-user w3-mobile w3-center">
        <div class="w3-half w3-auto w3-mobile w3-margin w3-padding w3-light-grey w3-round w3-border  w3-center">Edit Profile</div>
        <div class="w3-half w3-auto w3-mobile w3-margin w3-padding w3-light-grey w3-round w3-border  w3-center">Scan QR</div>

    </div>

</main>
        <?php
    }
    echo "Must only be accessible after login/signin.
    <br> Use session cookes.";
?>

<?php include "./components/Footer.php";?>
