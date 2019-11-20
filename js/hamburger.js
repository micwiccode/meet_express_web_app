const hamburgerToggle = document.querySelector('.hamburger__toggle');
const nav = document.querySelector('.nav');

const showNav = () => {
    hamburgerToggle.classList.toggle('hamburger__toggle--active');
    nav.classList.toggle('nav--active');
};

hamburgerToggle.addEventListener('click', showNav);

window.addEventListener('click', function () {

    if (window.innerWidth < 750 && window.innerWidth - event.screenX < 100) {
        showNav();
    }
});


