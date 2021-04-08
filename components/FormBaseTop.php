<?php 
# routes
$action_page = '';
$submit_text = 'Error';

switch($pageName){
    case $baseURI.'login.php':
        $action_page = $baseURI.'private/signin.php';
        $submit_text = 'Log In';
        break;
    case $baseURI.'signup.php':
        $action_page = $baseURI.'private/signup.php';
        $submit_text = 'Sign Up';
        break;
}
?>
<div class="form_base w3-section w3-card-2 w3-auto w3-round-xxlarge">
    <form class="w3-form form_input_group w3-section w3-mobile w3-round-xlarge "
     action="<?php echo $action_page ?>">
        
    <div class="form_input w3-auto  w3-section w3-padding">