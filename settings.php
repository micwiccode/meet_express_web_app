<!DOCTYPE html>
<html lang="en">
<?php 

session_start();

if (isset($_COOKIE['configure'])) {
  $config = unserialize($_COOKIE['configure']);
  $backColor = $config['backColor'];
  $fontColor = $config['fontColor'];
  $fontFamily = $config['fontFamily'];
} else {
  $backColor = "#fff";
  $fontColor = "#000";
  $fontFamily = "'Montserrat', sans-serif";
}
    var_dump($_COOKIE['configure']);
?>

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Meet Express application, a new way of connecting and meeting people. Create a new evenets, take part in the events in your nearby.">
  <meta name="keywords" content="meet, get to know, events">
  <meta name="author" content="Michał Wiczk, Maciej Bartosik">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Meet Express - settings</title>
  <link href="https://fonts.googleapis.com/css?family=Fugaz+One&display=swap" rel="stylesheet">
  <?php include './wrapper.php'; ?>
  <link rel="stylesheet" type='text/css' href="./css/header.css">
  <link rel="stylesheet" type='text/css' href="./css/footer.css">
  <link rel="stylesheet" type='text/css' href="./css/settings.css">
  <script src='./js/hamburger.js' defer></script>
  <script src='./js/underlineCurrent.js' defer></script>
</head>

<body>
  <?php include './header.php' ?>

  <section class="container" id="upper">
    <h1 class="container__header">Settings</h1>
    <form class="customize" method="get" name="customize" action="./php/settingsScript.php">
      <label class="customize__label">
        Customize background's color:
        <input name="back_color" type="color" id="back_color" value=<?php echo $backColor; ?>>
      </label>
      &nbsp;&nbsp;&nbsp;
      <label class="customize__label">
        Customize font's color:
        <input name="font_color" type="color" id="font_color" value=<?php echo $fontColor; ?>>
      </label>
      &nbsp;&nbsp;&nbsp;
      <label class="customize__label">
        Change font-family:
        <select name="font_family">
          <option>Arial</option>
          <option>Serif</option>
          <option>Monospace</option>
        </select>
      </label>
      &nbsp;&nbsp;&nbsp;
      <div>
        <input name="customize__confirm" class="customize__button" type="submit" value="Confirm">
        <input name="reset__confirm" class="customize__button" type="submit" value="Reset">
      </div>
    </form>
  </section>

</body>
<?php include './footer.php' ?>

</html>