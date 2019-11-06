function checkAge() {

    const myform = document.forms["signup__form"];
    const ageInput = document.getElementById("age");
    let age = parseInt(ageInput.value);
    if(age<18){
        alert("You are too young")
    }else {
            myform.submit();
    }
}

document.getElementById("next").addEventListener('click', checkAge);