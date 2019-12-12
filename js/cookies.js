const cookiesBox = document.querySelector('.cookies');
const cookiesBtn = document.querySelector('.cookies__button');

if (cookiesBox !== null) {
  cookiesBtn.addEventListener('click', () => {
    cookiesBox.classList.add('cookies--clicked');
  });
}
