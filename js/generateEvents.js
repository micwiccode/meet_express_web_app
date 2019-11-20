class Event {
  constructor (date, title, place, membersActual, membersMax) {
    this.date = date;
    this.title = title;
    this.place = place;
    this.membersActual = membersActual;
    this.membersMax = membersMax;
  }
}

const eventsCards = document.querySelector('.events');

const event1 = new Event(
  'Wed, 30.10.2019r.',
  'Trip in mountains',
  'Zakopane Wielka 12 Street',
  3,
  30
);
const event2 = new Event(
  'Thu, 24.10.2019r.',
  'Football match',
  'Wrocław, Wybrzeże Stanisława Wyspiańskiego 27 Street',
  9,
  10
);
const event3 = new Event(
  'Sun, 27.10.2019r.',
  'LOL tournament',
  'Wrocław, Kamienna 1 street',
  29,
  40
);
const event4 = new Event(
  'Mon, 28.10.2019r.',
  'Volleyball',
  'Wrocław, Chełmońskiego 10 Street',
  1,
  15
);
const event5 = new Event(
  'Thu, 31.10.2019r.',
  'Halloween Party',
  'Wrocław, St Nicolas 47 Street',
  3,
  15
);

const eventsList = [event1, event2, event3, event4, event5];

const generateEvents = () => {
  eventsList.forEach(event => {
    const box = document.createElement('div');
    box.className = 'box';
    const boxInfo = document.createElement('div');
    boxInfo.className = 'box__info';
    const boxDate = document.createElement('h5');
    boxDate.className = 'box__date';
    const boxTitle = document.createElement('h2');
    boxTitle.className = 'box__title';
    const boxPlace = document.createElement('h4');
    boxPlace.className = 'box__place';
    const boxBottom = document.createElement('div');
    boxBottom.className = 'box__botoom';
    const boxMembers = document.createElement('h3');
    boxMembers.className = 'box__members';
    const form = document.createElement('form');
    form.innerHTML =
      '<form method="#"><button class="box__button button" type="submit">Take part in</button></form>';
    box.appendChild(boxInfo);
    boxDate.innerHTML = event.date;
    boxTitle.innerHTML = event.title;
    boxPlace.innerHTML = event.place;
    boxInfo.appendChild(boxDate);
    boxInfo.appendChild(boxTitle);
    boxInfo.appendChild(boxPlace);
    box.appendChild(boxBottom);
    boxMembers.innerHTML = `${event.membersActual}/${event.membersMax}`;
    boxBottom.appendChild(form);
    boxBottom.insertBefore(boxMembers, form);

    eventsCards.appendChild(box);

    const text1 = 'something';
    const textNode1 = document.createTextNode(text1);
    box.appendChild(textNode1);
    const text2 = 'maybe another';
    const textNode2 = document.createTextNode(text2);
    box.replaceChild(textNode2, textNode1);
    console.log(textNode2.parentNode);
    box.removeChild(textNode2);
  });
};

document.body.onload = generateEvents();


/*
<div class="box">
                <div class="box__info">
                    <h5 class="box__date">Wed, 30.10.2019r.</h5>
                    <h2 class="box__title">Trip in mountains</h2>
                    <h4 class="box__place">Zakopane Wielka 12 Street</h4>
                </div>
                <div class="box__botoom">
                    <h3 class="box__members">3/30</h3>
                    <form method="#">
                        <button class="box__button button" type="submit">Take part in</button>
                    </form>
                </div>
            </div>
            <div class="box">
                <div class="box__info">
                    <h5 class="box__date">Thu, 24.10.2019r.</h5>
                    <h2 class="box__title">Football match</h2>
                    <h4 class="box__place">Wrocław, Wybrzeże Stanisława Wyspiańskiego 27 Street</h4>
                </div>
                <div class="box__botoom">
                    <h3 class="box__members">9/10</h3>
                    <form method="#">
                        <button class="box__button button" type="submit">Take part in</button>
                    </form>
                </div>
            </div>
            <div class="box">
                <div class="box__info">
                    <h5 class="box__date">Sun, 27.10.2019r.</h5>
                    <h2 class="box__title">LOL tournament</h2>
                    <h4 class="box__place">Wrocław, Kamienna 1 street</h4>
                </div>
                <div class="box__botoom">
                    <h3 class="box__members">29/40</h3>
                    <form method="#">
                        <button class="box__button button" type="submit">Take part in</button>
                    </form>
                </div>
            </div>
            <div class="box">
                <div class="box__info">
                    <h5 class="box__date">Mon, 28.10.2019r.</h5>
                    <h2 class="box__title">Volleyball</h2>
                    <h4 class="box__place">Wrocław, Chełmońskiego 10 Street</h4>
                </div>
                <div class="box__botoom">
                    <h3 class="box__members">1/15</h3>
                    <form method="#">
                        <button class="box__button button" type="submit">Take part in</button>
                    </form>
                </div>
            </div>
            <div class="box">
                <div class="box__info">
                    <h5 class="box__date">Thu, 31.10.2019r.</h5>
                    <h2 class="box__title">Halloween Party</h2>
                    <h4 class="box__place">Wrocław, St Nicolas 47 Street</h4>
                </div>
                <div class="box__botoom">
                    <h3 class="box__members">1/15</h3>
                    <form method="#">
                        <button class="box__button button" type="submit">Take part in</button>
                    </form>
                </div>
            </div>
            */