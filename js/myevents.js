function deleteEvent(deleteButton) {
    deleteButton.parentNode.parentNode.parentNode.remove();
}

function deleteEventOnClick(event, deleteButton) {
    if(event.altKey || event.shiftKey || event.ctrlKey ){
        deleteButton.parentNode.parentNode.parentNode.remove();
    } else {
        alert("The key was NOT pressed!");
    }
}

const boxes = document.getElementsByClassName('box');
for (var i = 0; i<boxes.length; i++) {
    boxes[i].addEventListener('click', function (){
        console.log("client - X: " + event.clientX + ", Y coords: " + event.clientY);
    });

}
const deleteButtons  = document.getElementsByClassName('box__button box__button--delete');
for (var j =0; j<deleteButtons.length; j++)
{
    deleteButtons[j].addEventListener('click', function () {
        deleteEventOnClick(event, this);
    })
}

alert("Watch out! You have " + document.images.length + " image, " + document.links.length + " links and " + document.forms.length + ' forms on this site');



