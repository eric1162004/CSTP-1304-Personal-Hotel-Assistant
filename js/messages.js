document.addEventListener('DOMContentLoaded', function() {

    $('.messages').scrollTop($('.messages')[0].scrollHeight);

    const urlParams = new URLSearchParams(window.location.search);
    const myParam = urlParams.get('q');
    console.log(myParam);
    if(myParam !== ''){
        sendMessage(myParam);
    }

})

function sendMessage(customerMsg){
    console.log(customerMsg);
    text = customerMsg === undefined ? document.getElementById("textMessage").value : customerMsg;
    
    if(text !== "" && text !== null){
        console.log(text);
        messages = document.getElementById('messages');

        li = document.createElement("li");
        div1 = document.createElement("div");
        div2 = document.createElement("div");
        p = document.createElement("p");
        br = document.createElement("br");
        time = document.createElement("span");

        li.className = 'collection-item';
        div1.className = 'row right-align';
        div2.className = 'col s-12 userMsgWidth';

        p.innerText = text;

        li.appendChild(div1);
        div1.appendChild(div2);
        div2.appendChild(p);
        p.appendChild(br);
        time.innerText = '08:02 am';
        p.appendChild(time);

        messages.appendChild(li);

        // Scroll to the bottom of the messagebox
        $('.messages').scrollTop($('.messages')[0].scrollHeight);
        document.getElementById("textMessage").value = "";
        
        setTimeout(() => {  
            replyMessage(messages);
            $('.messages').scrollTop($('.messages')[0].scrollHeight);
        }, 1000);
    }
}

function replyMessage(messages){ 

    replies = ["Ok.", "Wise choice!", "Absolutely.", "Will Do that!", "Roger that!", "Very Well."];
    pos = Math.floor(Math.random() * replies.length);
    console.log(pos);
    reply = replies[pos];

    li = document.createElement("li");
    div1 = document.createElement("div");
    div2 = document.createElement("div");
    div3 = document.createElement("div");
    i = document.createElement("i");
    p = document.createElement("p");
    br = document.createElement("br");
    time = document.createElement("span");

    li.className = "collection-item";
    div1.className = "row";
    div2.className = "col s-2";
    div3.className = "col s-10 androidMsgSize";
    i.className = "fab fa-android ";

    p.innerText = reply;

    li.appendChild(div1);
    div1.appendChild(div2);
    div1.appendChild(div3);
    div2.appendChild(i);
    div3.appendChild(p);
    p.appendChild(br);
    time.innerText = '08:02 am';
    p.appendChild(time);
    messages.appendChild(li);
}