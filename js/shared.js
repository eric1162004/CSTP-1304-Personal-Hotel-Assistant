document.addEventListener('DOMContentLoaded', function() {
    M.AutoInit();

    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
});

// toggle input message control
$("#keyboardIcon").click(function(){
    $("#textMessageBox").slideToggle();
});

//toggle Speaker on/off
function onMouseDownSpeaker(icon) {
    icon.classList = "fas fa-microphone red-text";
}
function onMouseUpSpeaker(icon) {
    icon.classList = "fas fa-microphone ";
}

// toggle volume icon
function toggleVolume(icon) {
    className = icon.classList[1];
    icon.classList = (className === "fa-volume-up")? 
    "fa fa-volume-mute red-text": "fa fa-volume-up";
}

// Live Call
function openLiveCall(){
    liveCall = document.getElementById("liveCall");
    liveCall.style.display = "block";

    elem = document.querySelector('.sidenav');
    sidenav = M.Sidenav.getInstance(elem);
    sidenav.close();
}
function closeLiveCall(){
    liveCall = document.getElementById("liveCall");
    liveCall.style.display = "none";
}