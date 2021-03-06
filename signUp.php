<?php 
require_once("inc/utilities/Shared.class.php");
Shared::header("Personal Hotel App Login");
?>

<div class="row center-align" >

<div class="col s12 m8 offset-m2" style="padding:25px 20px 100px 20px">

    <a href="index.php">
    <img src="assets/hotelLogo.png" alt="hotel logo" width="200px">
    </a>

    <h4 class="bold">Sign Up</h4>

    <div class="input-field">
        <i class="material-icons prefix">account_circle</i>
        <input id="icon_prefix" type="text" class="validate">
        <label for="icon_prefix">First Name</label>
    </div>
    
    <div class="input-field">
        <i class="material-icons prefix">account_circle</i>
        <input id="icon_prefix" type="text" class="validate">
        <label for="icon_prefix">Last Name</label>
    </div>

    <div class="input-field">
        <i class="material-icons prefix">email</i>
        <input id="icon_prefix" type="text" class="validate">
        <label for="icon_prefix">Email</label>
    </div>

    <div class="input-field">
        <i class="material-icons prefix">lock</i>
        <input id="icon_prefix" type="text" class="validate">
        <label for="icon_prefix">Password</label>
    </div>

    <div class="input-field">
        <i class="material-icons prefix">lock</i>
        <input id="icon_prefix" type="text" class="validate">
        <label for="icon_prefix">Confirm Password</label>
    </div>

    <label>
        <input type="checkbox" class="filled-in" checked="checked" />
        <span>I agree to the terms & conditions.</span>
    </label>

    <a href="checkIn.php">
        <button class="waves-effect waves-light btn" name="signUpBtn">Sign Up</button>
    </a>


    </div>
</div>

</div>

<?php
Shared::footer();
?>
