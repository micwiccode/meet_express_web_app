let unsuccessfulLoginCounter = 0;
const button = document.getElementById('login__confirm');

function checkLogin () {
  const login = document.getElementById('login__name').value;
  const password = document.getElementById('login__password').value;
  if (login === 'admin' && password === 'admin') {
    document.writeln('Successful login');
  } else {
    unsuccessfulLoginCounter++;
    if (unsuccessfulLoginCounter >= 3) {
      let isPerson = false;
      do {
          isPerson = 1337 === Math.round(parseFloat(window.prompt('If you are not a robot please write number which rounded gives 1337')));
      } while (!isPerson);
    } else {
      window.alert('Permission denied');
    }
  }
}

button.addEventListener('click', checkLogin);
