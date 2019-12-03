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
  <title>Meet Express - sign up</title>
  <link href="https://fonts.googleapis.com/css?family=Fugaz+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" type='text/css' href="./css/wrapper.css">
  <link rel="stylesheet" type='text/css' href="./css/header.css">
  <link rel="stylesheet" type='text/css' href="./css/footer.css">
  <link rel="stylesheet" type='text/css' href="./css/signupNextPage.css">
  <script src='./js/hamburger.js' defer></script>
</head>

<body>
  <?php include './headerForGuest.php'?>
  <section class="container" id="upper">
    <h1 class="container__header">Sign up</h1>
    <form class="form" action="./php/validate.php" autocomplete="on" method="post">
      <div class="form__group">
        <label for="user_name">User name</label>
        <input id="user_name" class="form__input" type="text" name="user_name" placeholder="user" required>
      </div>
      <div class="form__group">
        <label for="user_password">Password</label>
        <input id="user_password" class="form__input" type="password" name="user_password" placeholder="*********"
          required>
      </div>
      <div class="form__group">
        <label for="user_password_repeat">Repeat password</label>
        <input id="user_password_repeat" class="form__input" type="password" name="user_password_repeat"
          placeholder="*********" required>
      </div>
      <div class="form__buttons">
        <input class="form__button" type="submit" value="Sign up">
        <a href='./signup.php' class="form__button">Back</a>
        <input class="form__button" type="reset" value="Clear">
      </div>
    </form>
  </section>
  <?php include './footer.php'?>
</body>