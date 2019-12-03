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
  <title>Meet Express - log in</title>
  <link href="https://fonts.googleapis.com/css?family=Fugaz+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" type='text/css' href="./css/wrapper.css">
  <link rel="stylesheet" type='text/css' href="./css/header.css">
  <link rel="stylesheet" type='text/css' href="./css/footer.css">
  <link rel="stylesheet" type='text/css' href="./css/login.css">
  <script src='./js/hamburger.js' defer></script>
  <script src='./js/login.js' defer></script>
</head>

<body>
  <?php include './headerForGuest.php'?>
  <section class="container" id="upper">
    <h1 class="container__header">Log in</h1>
    <form id="login__form" class="form" method="post" name="login">
      <div class="form__group">
        <label for="login__name" class="form__label">User name</label>
        <input id="login__name" class="form__input" type="text" name="login" required>
      </div>
      <div class="form__group">
        <label for="login__password" class="form__label">Password</label>
        <input id="login__password" class="form__input" type="password" name="password" required>
      </div>
      <div class="form__group">
        <input class="form__input" id="form__checkbox" type="checkbox">
        <label class="form__label">Remember me</label> 
      </div>
      <input id="login__confirm" class="form__button" type="button" value="Log in">
    </form>
  </section>
  <?php include './footer.php'?>
</body>

</html>