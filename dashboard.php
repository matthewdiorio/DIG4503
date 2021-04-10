<?php include 'components/Head.php'; ?>

<?php include './components/MainNavigation.php'; ?>

<?php 
    $userType = 'patron';
    if($userType == 'patron'){
      /**
       * 
       *  {
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
       */
      //All just dummy data
        $bankPictures = [
           'https://media-exp1.licdn.com/dms/image/C510BAQHlfm7KULdsBw/company-logo_200_200/0/1519889798320?e=2159024400&v=beta&t=TJS-PtLIAtwNCAA8Y799ggeWacedLqqhnWOXoWnFrrE',
           "https://pbs.twimg.com/profile_images/2924896269/3219fad95ba574ed71330b3f2503ca4a.jpeg",
           "https://pbs.twimg.com/profile_images/1326276919231393794/UTJ1kGRS_400x400.jpg"
        ];
        $bankNames = [
            'Knights Helping Knights Pantry',
            'Seeds of Paradise Food Pantry',
            'Food Distribution Center - Semoran Food Pantry'
        ];
        $bankTimes= [
            '10:00a.m. - 5:00p.m.',
            '11:00a.m. - 3:00p.m.',
            '8:30a.m. - 12:30p.m.'
        ];
        $bankDays = [
            'Wednesday',
            'Tuesday',
            'Monday'
        ];



        ?> 
        
<main class="dashboard">
    <div class="w3-row  w3-mobile">
        <div class="w3-half  w3-mobile">
            <div class=" w3-section">
                
                <div class="w3-margin-left w3-center">
                    <h2><strong>Welcome, <?php 
                    if(!isset($full_name)){
                        echo 'Default User';
                    }?></strong></h2>
                </div>
                <div class="w3-auto w3-card applications w3-round w3-border "> 
                
                    <div class="w3-right app-div w3-padding-large w3-left w3-auto">

                    <h4>Food Distribution Center <br> Semoran Food Pantry</h4>
                    <p>1771 N Semoran Blvd, <br/>Orlando, FL 32807</p>
                    <strong>In Review</strong>
                    </div>
                </div>

            </div>
            <div class=" w3-section">
                
                <div class="w3-margin-left w3-center">
                    <h2><strong> Upcoming Appointments</strong></h2>
                </div>
                <div class="w3-auto w3-card applications appointment w3-round w3-border "> 
                
                    <div class="w3-right app-div w3-padding-large w3-left w3-auto">

                    <h4>Knights Helping <br/>Knights Pantry</h4>
                    <p>4133 Pyxis Ln,<br/> Orlando, FL 32816</p>
                    <strong>Wednesday, 10:30a.m.</strong>
                    </div>
                </div>

            </div>
        </div>
        <div class="w3-half w3-mobile">
            <div class=" w3-section">
                <div class="w3-auto w3-margin-right">
                <h2>Events This Week</h2>
                <?php 
                    if(count($bankPictures) > 0){
                        $len_events = count($bankPictures);
                        
                        for ($i = 0; $i < $len_events; $i++){
                            ?>
                                <div class="w3-panel w3-white w3-card w3-bar w3-auto">
                                    <img style="max-width:5vw;" class="w3-bar-item w3-circle w3-mobile" src="<?php echo $bankPictures[$i]; ?>"/>
                                    <div class="w3-bar-item w3-auto">
                                        <strong class=" w3-section"><?php echo $bankNames[$i]; ?></strong>
                                        <p class=" w3-section" ><?php echo $bankDays[$i].' '.$bankTimes[$i]; ?></p>
                                    </div>
                                    
                                </div>
                            <?php
                        }
                    }
                ?>
                </div>
            </div>
            <div class="w3-auto w3-margin w3-padding ">
            <h3><strong>Scan Your QR</strong></h3>
            <img style="width:10vw;"class="w3-mobile w3-image w3-auto w3-light-grey w3-round w3-border  " src="./assets/qr_default.png" alt="default qr code">
           </div>
        </div>

    </div>
    <div class="w3-row w3-auto profile profile-user w3-mobile w3-center">
        <div class="w3-half w3-auto w3-mobile w3-margin w3-padding w3-light-grey w3-round w3-border  w3-center">Edit Profile</div>
       

    </div>

</main>
        <?php
    }
    echo "Must only be accessible after login/signin.
    <br> Use session cookes.";
?>

<?php include "./components/Footer.php";?>
