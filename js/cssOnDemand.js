const backColor = document.getElementById('back_color');
const fontColor = document.getElementById('font_color');
const fontFamily = document.getElementById('font_family');
const texts = [...document.querySelectorAll('.box__date'), ...document.querySelectorAll('.box__place')];
const container = document.querySelector('.container');
const apply = document.getElementById('apply_style');
const reset = document.querySelector('#refresh');

const applyStyles = () => {
  container.style.backgroundColor = backColor.value;
  texts.forEach(text => {
    text.style.color = fontColor.value;
    text.style.fontFamily = fontFamily.value;
  });
  console.log(fontFamily.value);
};

const resetStyles = () => {
  container.style.backgroundColor = '#fff';
  texts.forEach(text => {
    text.style.color = '#5576E3';
    text.style.fontFamily = '\'Montserrat\', sans-serif';
  });
};

apply.addEventListener('click', applyStyles);
reset.addEventListener('click', resetStyles);
