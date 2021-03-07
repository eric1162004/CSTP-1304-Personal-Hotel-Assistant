<?php 
require_once("inc/utilities/Shared.class.php");
Shared::header("Personal Hotel App Login");
?>

<div class="row">
    <div class="col m12 hide-on-small-only" style="height: 100px;"></div>
</div>

<div class="row center-align" style="padding:60px 30px 0px 30px">

<div class="col s12 m12 l4">
    <img src="assets/hotelLogo.png" alt="hotel logo" width="200px">
    <h4 class="light">Stay with us feel like home.</h4>
</div>

<div class="col s12 m12 l8">

    <div class="container">

    <div class="row">
    <div class="input-field col s12">
    <input id="email" type="email" class="validate">
    <label for="email">Email</label>
    </div>
    </div>

    <div class="row">
    <div class="input-field col s12">
    <input id="password" type="password" class="validate">
    <label for="password">Password</label>
    </div>
    </div>

    <div class="row">
    <div class="col s6 left-align">
    <label>
    <input type="checkbox" class="filled-in" checked="checked" />
    <span>Remember me?</span>
    </label>
    </div>

    <div class="col s6 right-align">
    <a href="#">Forgot Password?</a>
    </div>

    <div style="height:55px"></div>

    <div class="col s12">
    <a href="signUp.php"><button class="waves-effect waves-light btn" name="signUpBtn">Sign Up</button></a>
    <a href="home.php"><button class="waves-effect waves-light btn" name="loginBtn">Login</button></a>
    </div>

    </div>

    </div>
</div>

<?php
Shared::footer();
?>

