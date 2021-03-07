<?php 
require_once("inc/utilities/Shared.class.php");
Shared::header("Personal Hotel App Checkin", "css/checkin.css");
Shared::navbar("You have not checked in.", "red-text yellow"); 
?>

<div class="row" >

<div class="col s12 m8 offset-m2" style="padding:25px 20px 100px 20px">
  
  <div class="row">
    <div class="col s12 center">
      <img class="responsive-img" src="assets/checkin.png" alt="hotel logo" width="250">
  </div>
  
  <div class="col s12">
    <form>
      <h5>Booking Info</h5>
      <div class="input-field">
            <i class="material-icons prefix">account_circle</i>
            <input id="bookingReference" type="text" class="validate">
            <label for="bookingReference">Booking Reference Number</label>
      </div>
    <div class="input-field">
          <i class="material-icons prefix">call</i>
          <input id="contactNumber" type="tel" class="validate">
          <label for="contactNumber">Contact Number</label>
    </div>

    <h5>Credit Card Info <i class="fab fa-cc-visa"></i> <i class="fab fa-cc-mastercard"></i></h5>
    
    <div class="input-field">
      <i class="far fa-credit-card prefix"></i>
      <input id="creditCardNumber" type="text" class="validate">
      <label for="creditCardNumber">Credit Card Number</label>
    </div>

    <div class="row">

    <div class="col s1 input-field">
      <i class="far fa-calendar-alt" style="font-size:2.3em"></i>
    </div>
    <div class="input-field col s3">
    <select class="browser-default browser-selector">
      <option value="" disabled selected>Month</option>
      <option value="1">Jan</option>
      <option value="2">Feb</option>
      <option value="3">Mar</option>
      <option value="4">Apr</option>
      <option value="5">May</option>
      <option value="6">Jun</option>
      <option value="7">Jul</option>
      <option value="8">Aug</option>
      <option value="9">Sept</option>
      <option value="10">Oct</option>
      <option value="11">Nov</option>
      <option value="12">Dec</option>
    </select>
    </div>

    <div class="col s3 input-field ">
    <select class="browser-default browser-selector">
      <option value="" disabled selected>Year</option>
      <option value="2021">2021</option>
      <option value="2022">2022</option>
      <option value="2023">2023</option>
      <option value="2024">2024</option>
      <option value="2025">2025</option>
    </select>
    </div>

    <div class="input-field col s5">
      <input id="cvv" type="text" class="validate">
      <label for="cvv">CVV</label>
    </div>
    
    </div>
    
    <div class="row center">
      <a href="#" class="btn waves-effect waves-light">
        Reset
      </a>
      <a href="home.php" class="btn waves-effect waves-light">
        Check in
        <i class="fas fa-concierge-bell"></i>
      </a>
    </div>

    </form>
  </div>
  
</div>
</div>

<?php Shared::addLiveCallSection()?>

<!-- Add Jquery -->
<?php Shared::addJquery() ?>

<script>

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
});

</script>

<?php
Shared::footer();
?>
