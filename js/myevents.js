function deleteEvent(deleteButton) {
  deleteButton.parentNode.parentNode.parentNode.remove();
}

const deleteButtons = document.getElementsByClassName(
  'box__button box__button--delete'
);
for (var j = 0; j < deleteButtons.length; j++) {
  deleteButtons[j].addEventListener('click', function() {
    deleteEvent(this);
  });
}
