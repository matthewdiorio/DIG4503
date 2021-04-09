<?php 

include 'FormBaseTop.php';
include './private/signin.php';
?>


<input placeholder="Email"  type="email" name="email" id="input_email"
    class=" w3-mobile form_input_item
     w3-row w3-margin w3-input w3-round"
required>

<br/>

<input placeholder="Password" type="password" name="password" id="input_password"
    class="w3-mobile form_input_item 
    w3-margin w3-input  w3-round" 
required>

<input type="hidden" name="token" value="<?=$_SESSION['token']?>">

<?php include 'FormBaseBottom.php'; ?>