<?php 

include 'FormBase/FormBaseTop.php';
include './private/signin.php';
?>

<?php include 'FormBase/FormBaseTop.php'; ?>
<div class="w3-mobile w3-margin">
    <a class="w3-right w3-margin  w3-btn w3-blue 
            w3-text-white w3-auto w3-round-large w3-large
            w3-mobile  w3-blue"
    href="signup.php">Register</a>

</div>
<br/>
<?php
if(isset($Error) && !$Error ==""){
echo $Error;
}
?>
<input placeholder="Email"  type="email" name="email" id="input_email"
    class=" w3-mobile form_input_item
     w3-row w3-margin w3-input w3-round "
required
>

<br/>

<input placeholder="Password" type="password" name="password" id="input_password"
    class="w3-mobile form_input_item 
    w3-margin w3-input  w3-round" 
required
>

<input type="hidden" name="token" value="<?=$_SESSION['token']?>">

<?php include 'FormBase/FormBaseBottom.php'; ?>
