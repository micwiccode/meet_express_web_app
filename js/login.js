var unsuccessfulLoginCounter = 0;
function checkLogin() {
    var login = document.getElementById("login__name").value;
    var password = document.getElementById("login__password").value;
    if(login === "admin" && password ==="admin"){
        document.writeln("Successful login")
    }
    else {
        unsuccessfulLoginCounter++;
        if(unsuccessfulLoginCounter>=3){

            var isPerson = false;
            do{
                isPerson = window.prompt('If you are not a robot please write "I love JS"') === "I love JS";
            } while (!isPerson);
        }else {
            window.alert("Permission denied");
        }
    }
}

button = document.getElementById("login_confirm");
button.addEventListener("click", checkLogin);