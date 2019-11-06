function checkAge() {
  const myform = document.forms.signup__form;
  const ageInput = document.getElementById('age');
  const age = parseInt(ageInput.value);
  if (age === 0) {
    window.alert('Enter your age');
  } else if (age < 18) {
    window.alert('You are too young');
  } else {
    myform.submit();
  }
}

document.getElementById('next').addEventListener('click', checkAge);
