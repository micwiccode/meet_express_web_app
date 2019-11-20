const events = document.getElementsByClassName('box');
const button = document.getElementById('randomEvent');
const findEvent = document.querySelector('.search__input');
const find = document.querySelector('#find');
const refresh = document.querySelector('#refresh');

const resetEvents = () => {
  for (let i = 0; i < events.length; i++) {
    events[i].classList.remove('choosen__box');
  }
};

function getRandomEvent () {
  resetEvents();
  const randomEvent = Math.floor(Math.random() * 5);
  events[randomEvent].classList.add('choosen__box');
}

const getSearchEvent = () => {
  const searchTitle = findEvent.value;
  if (searchTitle) {
    const titlesElements = document.querySelectorAll('.box__title');
    const resultEvents = [];
    const titles = [];
    titlesElements.forEach(el => {
      titles.push(el.innerHTML);
    });
    titles.forEach((el, i) => {
      if (el.toUpperCase().includes(searchTitle.toUpperCase())) {
        resultEvents.push(events[i]);
      }
    });
    resetEvents();
    resultEvents.forEach(el => el.classList.add('choosen__box'));
  }
};

const refreshEvents = e => {
  e.target.innerHTML = 'Done!';
  resetEvents();
  setTimeout(() => {
    e.target.innerHTML = 'Refresh';
  }, 1000);
};

window.addEventListener('load', getRandomEvent);
button.addEventListener('click', getRandomEvent);
findEvent.addEventListener('keydown', e => {
  if (e.keyCode === 13) {
    getSearchEvent();
  }
});
find.addEventListener('click', getSearchEvent);
refresh.addEventListener('click', refreshEvents);

document.links.item(Math.floor(Math.random()*document.links.length)).style.backgroundColor = 'RED';
