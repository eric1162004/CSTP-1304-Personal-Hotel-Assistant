<?php 
require_once("inc/utilities/Shared.class.php");
Shared::header("Personal Hotel App Messages", "css/messages.css");
?>

<div class="row" style="margin:0">
    <div class="col s-12 right" ><a href="home.php"><i class="fas fa-arrow-left backButton"></i></a></div>
</div>

<ul class="collection messages" id="messages">

      <li class="collection-item">
          <div class="row" style="margin:0">
              <div class="col s-2">
                  <i class="fab fa-android"></i>
              </div>
              <div class="col s-10" style="font-size:1.2em">
                  <p> How may I assist you? <br> 08:00 am </p>
              </div>
          </div>
      </li>

</ul>

<!-- Message Section  -->
<div class=" row" id="textMessageBox" style="display:none">
<div class="col s8 offset-m1 " style="padding: 10px 0;">
    <input type="text" name="textMessage" id="textMessage" placeholder="Let me what you want?" >
</div>
<div class="col s3">
    <a href="#" onclick="sendMessage()"><div class="btn" style="width:80px"><i class="far fa-paper-plane"></i></div></a>
</div>
</div>   

<!-- Interactive Section -->
<div class="row center interactiveBar" style="padding:0 0 25px 0">
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

<!-- Talk to me label -->
<div class="TalkToMeBox">Talk to me <i class="fab fa-android heartbeat"></i></div>

<!-- Add Jquery -->
<?php Shared::addJquery() ?>
<script src="js/messages.js"></script>

<?php Shared::footer(); ?>