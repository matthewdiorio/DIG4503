<div class="w3-bar">
<?php 
if ($options_remember == true){ ?>
    <p class="w3-bar-item w3-left">
        <input class="w3-check" name="remember" type="checkbox">
        <label class="w3-text-white">Remember Me</label>
    </p>
<?php }

?>
<p class="w3-bar-item w3-right ">
    <a class="w3-text-white form_link" href="<?php echo $options_link;?>">
    <?php echo $options_text;?></a>
</p>    
</div>