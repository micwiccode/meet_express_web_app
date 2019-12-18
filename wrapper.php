<?php
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
?>

<style>
  body {
    padding: 0;
    margin: 0;
    font-family: <?php echo $fontFamily; ?>;
    min-height: 100vh;
    padding-top: 20vh;
    background-color: <?php echo $backColor; ?>;
    color: <?php echo $fontColor; ?>;
  }

  *,
  *::after,
  *::before {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }

  @media screen and (max-width: 1150px) and (min-width:750px) {
    body {
      padding-top: 30vh;
    }
  }
</style>