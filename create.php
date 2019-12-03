<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description"
    content="Meet Express application, a new way of connecting and meeting people. Create a new evenets, take part in the events in your nearby.">
  <meta name="keywords" content="meet, get to know, events">
  <meta name="author" content="Michał Wiczk, Maciej Bartosik">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Meet Express - create event</title>
  <link href="https://fonts.googleapis.com/css?family=Fugaz+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" type='text/css' href="./css/wrapper.css">
  <link rel="stylesheet" type='text/css' href="./css/header.css">
  <link rel="stylesheet" type='text/css' href="./css/footer.css">
  <link rel="stylesheet" type='text/css' href="./css/create.css">
  <script src='./js/hamburger.js' defer></script>
  <script src='./js/underlineCurrent.js' defer></script>
</head>

<body>
  <?php include './headerForGuest.php'?>
  <section class="container" id="upper">
    <h1 class="container__header">Create event</h1>
    <form class="form" action="#">
      <div class="form__group">
        <label for="name" class="form__label">Event name</label>
        <input id="name" class="form__input" type="text" name="event_name">
      </div>
      <div class="form__group">
        <label for="number" class="form__label">Number of members</label>
        <input id="number" class="form__input" type="number" name="number_of_members">
      </div>
      <div class="form__group">
        <label class="form__label">Address
          <label for="city" class="form__label">City</label>
          <input id="city" class="form__input" type="text" name="event_city" placeholder="Wrocław">
          <label for="post_code" class="form__label">Post code</label>
          <input id="post_code" class="form__input" type="text" name="event_post_code" pattern="[0-9]{2}\-[0-9]{3}" placeholder="11-222">
          <label for="street_name" class="form__label">Street name</label>
          <input id="street_name" class="form__input" type="text" name="event_street_name" placeholder="Pocztowa Street">
          <label for="street_number" class="form__label">Street number</label>
          <input id="street_number" class="form__input" type="text" name="event_street_number" placeholder="1">
        </label>
      </div>
      <div class="form__group">
        <label class="form__label">Type (You can chceck multpile options)
          <div class="form__checkbox">
            <label for="sport">Sport
              <input id="sport" type="checkbox" name="event_type">
            </label>
            <label for="meeting">Meeting
              <input id="meeting" type="checkbox" name="event_type">
            </label>
            <label for="trip">Trip
              <input id="trip" type="checkbox" name="event_type">
            </label>
          </div>
        </label>
      </div>
      <div class="form__group">
        <label for="description" class="form__label">Short description</label>
        <textarea id="description" class="form__input" name="event_description" rows="5" cols="45"
          placeholder="Tell us something about you..."></textarea>
      </div>
      <div class="form__buttons">
        <input type="submit" value="Create" class="form__button">
        <input type="reset" value="Clear" class="form__button">
      </div>
    </form>
  </section>
  <?php include './footer.php'?>
</body>

</html>