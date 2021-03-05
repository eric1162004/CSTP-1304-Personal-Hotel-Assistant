<?php 
require_once("inc/utilities/Shared.class.php");
require_once("inc/utilities/PopUp.class.php");
Shared::header("Personal Hotel App Home", "css/home.css");
Shared::navbar("Day 1 at Hotel Prometheus.");
?>

<!-- Carousel Section -->
<div class="carousel bg-pan-left">
    <a class="carousel-item" href="#five!" id="stayInfoIcon"><img src="assets/stayInfoIcon.png"></a>
    <a class="carousel-item" href="#five!" id="hotelKeyIcon"><img src="assets/hotelKeyIcon.png"></a>
    <a class="carousel-item" href="#five!" id="hotelUsageIcon"><img src="assets/hotelUsageIcon.png"></a>
    <a class="carousel-item" href="#five!" id="housekeepingIcon"><img src="assets/housekeepingIcon.png"></a>
</div>


<!-- Suggestion Section -->
<div class="suggestionBox ">
<span class="suggestionBoxTitle">Suggestions to do:</span>
<br>
<div class="container scrolling-wrapper">
    <div class="suggestion-label red"><a href="#!" class="collection-item">Reservation</a></div>
    <div class="suggestion-label"><a href="#!" class="collection-item">Reservation</a></div>
    <div class="suggestion-label yellow"><a href="#!" class="collection-item">Reservation</a></div>
    <div class="suggestion-label blue"><a href="#!" class="collection-item">Reservation</a></div>
    <div class="suggestion-label"><a href="#!" class="collection-item">Reservation</a></div>
    <div class="suggestion-label red"><a href="#!" class="collection-item">Reservation</a></div>
</div>
</div>

<!-- Message Section  -->
<div class="container row" id="textMessageBox" style="display:none">
<div class="col s9">
    <input type="text" name="textMessage" id="textMessage" placeholder="I want to order a burgar" >
</div>
<div class="col s3 ">
    <div class="btn" style="width:80px"><i class="far fa-paper-plane"></i></div>
</div>
</div>   

<!-- Interactive Section -->
<div class="row center interactiveBar">
    <div class="col s3 interactiveIcon-side">
        <i class="fas fa-volume-up" onclick="toggleVolume(this)"></i>
    </div>
    <div class="col s6">
        <div class="interactiveIcon-main">
            <i class="fas fa-microphone heartbeat" 
            onmousedown="onMouseDownSpeaker(this)"
            onmouseup="onMouseUpSpeaker(this)"
            ontouchstart="onMouseDownSpeaker(this)"
            ontouchend="onMouseUpSpeaker(this)"
            ></i>
        </div>
    </div>
    <div class="col s3 interactiveIcon-side">
        <i class="fas fa-keyboard" id="keyboardIcon"></i>
    </div>
</div>

<!-- Hidden PopUp Boxes -->
<?php 

$box1 = 
'
<div class="col s12">
<p>Guest Name: Rahim V.</p>
</div>
<div class="col s12">
    <p>BookingReference: A1045724</p>
</div>
<div class="col s12">
    <p>Room Number: 001</p>
</div>
<div class="col s12">
    <p>Wifi Password: Hot3l@1234</p>
</div>
<div class="col s12">
    <p>Check In: 2021-04-15</p>
</div>
<div class="col s12">
    <p>Check Out: 2022-04-15</p>
</div>';

$box2 = 
'<div class="col s12 center">
    <img class="vibrate-2" src="assets/keyCard.png" alt="key card" width="100%">
    <h5 class="green-text bold">Ready To Tap!</h5>
</div>';

$box3 =
'<div class="col s12 center" >
    <img src="assets/houseKeeperImg.jpg" alt="HouseKeeperImg" width="200" style="border-radius:100%">
</div>
<div class="col s12">
    <p>HouseKeeper: Chun Li</p>
</div>
<div class="col s12">
    <p>Scheduled Time: 08:30am - 08:45am</p>
</div>';

$box4 = '
<div class="col s12">
<p class="right">@8:00am</p>
<canvas id="myChart" width=1 height=1.1></canvas>
</div>
';

PopUp::PopUpBoxes($box1, "box1", "Stay Info"); 
PopUp::PopUpBoxes($box2, "box2", "Hotel Key"); 
PopUp::PopUpBoxes($box3, "box3", "HouseKeeping Info"); 
PopUp::PopUpBoxes($box4, "box4", "Hotel Usage"); 

?>

<!-- Script for chart.js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script src="js/home.js"></script>

<?php
Shared::footer();
?>