<!DOCTYPE html>
<html lang="en">
<?php if(session_status()!=PHP_SESSION_ACTIVE){
    session_start();
}
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
<?php include 'php/getUser.php';
?>
  <?php include './header.php' ?>
  <section class="container" id="upper">
    <h1 class="container__header">My data</h1>
    <div class="container__error">
      <?php if (isset($_SESSION["messageSign"])) : ?>
        <h5><?php echo $_SESSION["messageSign"] ?></h5>
      <?php endif; ?>
    </div>
    <form id="signup__form" name="signup__form" class="form" action="php/userDataScript.php" autocomplete="on" method="post">
      <div class="form__group">
        <label for="name" class="required">Name</label>
        <input id="name" class="form__input" type="text" name="user_name" placeholder="John" value="<?php echo $user['name']?>" required autofocus>
      </div>
      <div class="form__group">
        <label id="for"  class="required">Surname</label>
        <input id="surname" class="form__input" type="text" name="user_surname" placeholder="Copper"  value="<?php echo $user['surname']?>"required>
      </div>
      <div class="form__group">
        <label class="form__label required">Sex</label>
        <div class="form__input">
          <label for="man">Man</label>
          <input id="man" type="radio" name="user_sex" value="m" <?php if($user['sex']=="m") echo "checked" ?>>
          <label for="woman">Woman</label>
          <input id="woman" type="radio" name="user_sex" value="w" <?php if($user['sex']=="w") echo "checked" ?>>
        </div>
      </div>
      <div class="form__group">
        <label for="email" class="form__label required">E-mail</label>
        <input id="email" class="form__input" type="email" name="user_email" value="<?php echo $user['email']?>" placeholder="john.coppper@gmial.com" required>
      </div>
      <div class="form__group">
        <label for="age" class="form__label required">Age</label>
        <input id="age" class="form__input" type="text" name="user_age" value="<?php echo $user['age']?>" placeholder="0" required>
      </div>
      <div class="form__group">
        <label for="phone" class="form__label required">Phone</label>
        <input id="phone" class="form__input" type="tel" name="user_phone" value="<?php echo $user['phone']?>" placeholder="111 222 333" required />
      </div>
      <div class="form__buttons">
        <input id="next" class="form__button" type="button" value="Confirm">
        <input class="form__button" type="reset" value="Clear">
      </div>
      </div>
    </form>
  </section>
<?php unset($_SESSION["messageSign"]);?>
  <?php include './footer.php' ?>
</body>

</html>