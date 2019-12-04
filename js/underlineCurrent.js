const headerLinks = document.querySelectorAll('.nav__element');

let path = window.location.pathname;
path = path.substring(path.lastIndexOf('/') + 1);

const deleteUndeline = () => {
  headerLinks.forEach(link => link.classList.remove('nav__element--active'));
};

switch (path) {
  case 'create.php':
    deleteUndeline();
    headerLinks[0].classList.add('nav__element--active');
    break;
  case 'findevents.php':
    deleteUndeline();
    headerLinks[1].classList.add('nav__element--active');
    break;
  case 'myevents.php':
    deleteUndeline();
    headerLinks[2].classList.add('nav__element--active');
    break;
  case 'login.php':
    deleteUndeline();
    headerLinks[3].classList.add('nav__element--active');
    break;
}
