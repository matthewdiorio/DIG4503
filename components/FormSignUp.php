<?php include 'FormBaseTop.php'; ?>

<input placeholder="First Name"  type="text" name="fname" id="input_fname"
    class=" w3-mobile form_input_item
     w3-row w3-margin w3-input w3-round"
required>

<input placeholder="Last Name"  type="text" name="lname" id="input_lname"
    class=" w3-mobile form_input_item
     w3-row w3-margin w3-input w3-round"
required>

<br/>
<input placeholder="XXX-XXX-1234" type="tel" name="telephone" id="input_telephone"
    class="w3-mobile form_input_item 
    w3-margin w3-input  w3-round" 
required>

<input placeholder="Zip Code"  type="number" name="zipcode" id="input_zipcode"
    class=" w3-mobile form_input_item
     w3-row w3-margin w3-input w3-round"
required>
<br/>
<input placeholder="Email"  type="email" name="email" id="input_email"
    class=" w3-mobile form_input_item
     w3-row w3-margin w3-input w3-round"
required>

<input placeholder="Password" type="password" name="password" id="input_password"
    class="w3-mobile form_input_item 
    w3-margin w3-input  w3-round" 
required>

<input type="hidden" name="token" value="<?=$_SESSION['token']?>">

<?php include 'FormBaseBottom.php'; ?>