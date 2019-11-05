const hamburgerToggle = document.querySelector('.hamburger__toggle');
const nav = document.querySelector('.nav');

const showNav = () => {
  hamburgerToggle.classList.toggle('hamburger__toggle--active');
  nav.classList.toggle('nav--active');
};

hamburgerToggle.addEventListener('click', showNav);
