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
  <title>Meet Express - sign up</title>
  <link href="https://fonts.googleapis.com/css?family=Fugaz+One&display=swap" rel="stylesheet">
  <?php include './wrapper.php'; ?>
  <link rel="stylesheet" type='text/css' href="./css/header.css">
  <link rel="stylesheet" type='text/css' href="./css/footer.css">
  <link rel="stylesheet" type='text/css' href="./css/signup.css">
  <script src='./js/hamburger.js' defer></script>
  <script src='./js/signup.js' defer></script>
</head>

<body>
  <?php include './header.php' ?>
  <section class="container" id="upper">
    <h1 class="container__header">Sign up</h1>
    <div class="container__error">
      <?php if (isset($_SESSION["messageSign"])) : ?>
        <h5><?php echo $_SESSION["messageSign"] ?></h5>
      <?php endif; ?>
    </div>
    <form id="signup__form" name="signup__form" class="form" action="php/signUpFirstScript.php" autocomplete="on" method="post">
      <div class="form__group">
        <label for="name">Name</label>
        <input id="name" class="form__input" type="text" name="user_name" placeholder="John" required autofocus>
      </div>
      <div class="form__group">
        <label id="for">Surname</label>
        <input id="surname" class="form__input" type="text" name="user_surname" placeholder="Copper" required>
      </div>
      <div class="form__group">
        <label class="form__label">Sex</label>
        <div class="form__input">
          <label for="man">Man</label>
          <input id="man" type="radio" name="user_sex" value="m">
          <label for="woman">Woman</label>
          <input id="woman" type="radio" name="user_sex" value="w">
        </div>
      </div>
      <div class="form__group">
        <label for="email" class="form__label">E-mail</label>
        <input id="email" class="form__input" type="email" name="user_email" placeholder="john.coppper@gmial.com" required>
      </div>
      <div class="form__group">
        <label for="age" class="form__label">Age</label>
        <input id="age" class="form__input" type="text" name="user_age" placeholder="0" required>
      </div>
      <div class="form__group">
        <label for="month" class="form__label">Month of birth</label>
        <input id="month" class="form__input" list="months" name="user_month">
        <datalist id="months">
          <option value="January"></option>
          <option value="February"></option>
          <option value="March"></option>
          <option value="April"></option>
          <option value="May"></option>
          <option value="June"></option>
          <option value="July"></option>
          <option value="August"></option>
          <option value="September"></option>
          <option value="October"></option>
          <option value="November"></option>
          <option value="December"></option>
        </datalist>
      </div>
      <div class="form__group">
        <label for="phone" class="form__label">Phone</label>
        <input id="phone" class="form__input" type="tel" name="user_phone" placeholder="111 222 333" required />
      </div>
      <div class="form__buttons">
        <input id="next" class="form__button" type="button" value="Next">
        <input class="form__button" type="reset" value="Clear">
      </div>
      </div>
    </form>
  </section>
  <?php include './footer.php' ?>
</body>

</html>