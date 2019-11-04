var events = document.getElementsByClassName("box");

function getRandomEvent() {
    for (var i = 0; i<events.length; i++) {
        events[i].style = "";
    }
    var randomEvent = Math.floor(Math.random()*5);
    events[randomEvent].style = "border:10px solid red;";
    console.log(events[randomEvent].style.border);
}

window.addEventListener('load',  getRandomEvent);

button = document.getElementById('randomEvent');
button.addEventListener('click', getRandomEvent);
