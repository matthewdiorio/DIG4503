<?php 
# routes
$action_page = '';
echo $pageName;

switch($pageName){
    case $baseURI.'login.php':
        $action_page = $baseURI.'private/signin.php';
        break;
    case $baseURI.'signup.php':
        $action_page = $baseURI.'private/signup.php';
        break;
}
?>
<div class="form_base w3-auto w3-round-xxlarge">
    <form class="w3-form form_input_group w3-section w3-mobile w3-round-xlarge w3-padding-large"
     action="<?php echo $action_page ?>">
        
    <div class="form_input w3-auto  w3-section w3-padding">