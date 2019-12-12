<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Meet Express application, a new way of connecting and meeting people. Create a new evenets, take part in the events in your nearby.">
  <meta name="keywords" content="meet, get to know, events">
  <meta name="author" content="Michał Wiczk, Maciej Bartosik">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Meet Express</title>
  <link href="https://fonts.googleapis.com/css?family=Fugaz+One&display=swap" rel="stylesheet">
  <?php include './wrapper.php'; ?>
  <link rel="stylesheet" type='text/css' href="./css/header.css">
  <link rel="stylesheet" type='text/css' href="./css/footer.css">
  <link rel="stylesheet" type='text/css' href="./css/index.css">
  <link rel="stylesheet" type='text/css' href="./css/cookiesbox.css">
  <script src='./js/hamburger.js' defer></script>
  <script src='./js/underlineCurrent.js' defer></script>
  <script src='./js/cookies.js' defer></script>
</head>

<body>
  <?php include './header.php' ?>
  <section class="container" id="upper">
    <div class="container__welcome">
      <?php if (isset($_SESSION["userName"])) : ?>
        <h1 class="container__welcome__text"><?php echo 'Welcome ' . $_SESSION["userName"] ?></h1>
      <?php endif; ?>
    </div>
    <article class="article">
      <div class="article__text">
        <h2 class="article__title">The best way to meet friends</h2>
        <p class="article__paragraph">
          Every meeting in one place. Find people who share your hobby. You are just one click away from having
          the best time of your life.
        </p>
        <div class="article__button">
          <a href="signup.php">Find it out</a>
        </div>
      </div>
      <img class="article__img" src="./img/backlit-bright-dawn-697243.jpg" alt="main-photo">
    </article>
    <article class=article>
      <div class="article__text">
        <h2 class="article__title">The easiest way to find events in your nearby</h2>
        <p class="article__paragraph">
          Plenty of free time? Don't know what to do? Laying on a bed and looking on the ceiling? Let's use MeetExpress?
          Watch the list of the events and find the most proper for you! Do it now!
        </p>
        <div class="article__button">
          <a href="findevents.php">Check events</a>
        </div>
      </div>
      <img class="article__img" src="./img/chatting-dog-faces-745045.jpg" alt="main-photo">
    </article>
    <article class=article>
      <div class="article__text">
        <h2 class="article__title">Organizing events has never been so easy</h2>
        <p class="article__paragraph">
          Do you what to meet friend? Don't know how to invite them? Do you organize a party or some sport activity?
          If your answer is "YES" for one of these questions, don't hesitate. Just join MeetExpress. Get to know the best meet web app!
          Let's create your first event!
        </p>
        <div class="article__button">
          <a href="create.php">Create event</a>
        </div>
      </div>
      <img class="article__img" src="./img/backlit-dawn-friends-862848.jpg" alt="main-photo">
    </article>
  </section>
  <?php if (!isset($_COOKIE['notFirstUse'])) : ?>
    <div class="cookies">
      <div class="cookies__box">
        <p class="cookies__box__info">
          We use cookies to enhance your experience. By continuing to visit this site you agree to our use of cookies.
        </p>
      </div>
      <form method="post" action="./php/cookiesInfo.php">
        <input type="submit" class="cookies__button" name="select" value="OK" />
      </form>
    </div>
  <?php endif; ?>
  <?php include './footer.php' ?>
</body>

</html>