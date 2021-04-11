<?php 
# routes
$action_page = 'dashboard';//return to error.php
$submit_text = 'Error';
$options_link = 'Error';
$options_text ='Error';
$options_remember = false;
$formName = 'Error';
switch($pageName){
    case $baseURI.'login.php':
        #$action_page = $baseURI.'private/signin.php';
        $submit_text = 'Log In';
        $options_link = 'private/account_reset.php';
        $options_text ='FORGOT PASSWORD';
        $options_remember = true;
        $formName = 'Signup';
        break;
    case $baseURI.'signup.php':
        #$action_page = $baseURI.'private/signup.php';
        $submit_text = 'Sign Up';
        $options_link = 'privacy.php';
        $options_text ='Privacy Policy';
        $formName = 'Login';
        break;
}
?>
<div class="form_base w3-section w3-card-2 w3-auto w3-round-xxlarge">
    <form class="w3-form form_input_group w3-section w3-mobile w3-round-xlarge "
     action="<?php echo $action_page ?>" method="POST">
      
    <div class="form_input w3-auto  w3-section w3-padding">