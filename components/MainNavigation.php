<?php
?>
<nav class="w3-bar ">
        <div class="nav-container">
            <div class="w3-row w3-stretch  w3-center w3-mobile">
                <a class="w3-bar-item w3-button  w3-center w3-mobile" href="./">
                    <img class="w3-image nav-logo" src="./assets/logo/FullLockup_forWhiteBG.png"
                        alt="FoodEx Logo Home icon"></a>
                <div class=" w3-bar-item nav-group w3-stretch nav-link-group w3-content w3-quarter">
                    <a class="nav-link  w3-bar-item w3-button w3-cell  w3-cell-bottom  w3-mobile" href="./">Home</a>
                    <a class="nav-link  w3-bar-item w3-button w3-cell  w3-cell-bottom  w3-mobile" href="about">About Us</a>
                    <a class="nav-link w3-bar-item w3-button w3-cell w3-cell-bottom w3-mobile" href="banks">Banks</a>
                </div>
                <div class="w3-bar-item nav-btn-group w3-half">
                    <div class="w3-row ">
                        <div class="input-icons">
                            <input class="nav-input w3-input input-field" placeholder="&#x1F50E;" type="text">
                        </div>
                        <div class="w3-row-padding">
<?php
if ($loggedIn == true){
    ?>
                        <a href="profile" class="profile w3-bar-item">
                        <img src="./assets/images/avatar.png"
                         class="avatar w3-image w3-round-xxlarge w3-mobile w3-light-blue w3-hover-red"/>
                         <strong class="w3-auto w3-padding">&#129171;</strong>
                         </a>

    <?php
} else{
    
?>
                            <a href="login" class="w3-bar-item">
                                <button class="w3-btn w3-round-xxlarge w3-mobile w3-light-blue w3-hover-red">Log In</button></a>
                            <a href="signup" class="w3-bar-item">
                                <button class="w3-btn w3-round-xxlarge w3-mobile w3-light-blue w3-hover-red">Sign Up</button></a>
<?php 
}
?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>  