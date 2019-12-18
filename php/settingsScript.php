<?php
  if (isset($_GET["customize__confirm"])) {
    $config = ["backColor" => $_GET["back_color"], "fontColor" => $_GET["font_color"], "fontFamily" => $_GET["font_family"]];
  }

  if (isset($_GET["reset__confirm"])) {
    $config = ["backColor" => "#fff", "fontColor" => "#000", "fontFamily" => "'Montserrat', sans-serif"];
  }

  $config = (serialize($config));
  setcookie('configure', $config, time() + 3600, '/');
  header('Location: ../settings.php');