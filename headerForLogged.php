<header class="header">
  <?php
  $menu = array("create.php", "findevents.php", "myevents.php", "settings.php", "php/logoutScript.php");
  ?>
  <a class="header__link" href="index.php">
    <div class="header__box">
      <img class="header__img" src="img/logo.png" alt="Logo">
      <div class="header__title">
        <h1 class="header__title__main">Meet Express </h1>
        <h3 class="header__title__sub">Meet, Enjoy And Befriend</h3>
      </div>
    </div>
  </a>
  <input id="hamburger__toggle" type="checkbox" class="hamburger__toggle" />
  <label for="hamburger__toggle" class="hamburger">
    <span class="hamburger__line"></span>
  </label>
  <nav class="nav">
    <ul class="nav__list">
      <li class="nav__element"><a class="nav__link" href="<?php echo current($menu) ?>">Create event</a></li>
      <li class="nav__element"><a class="nav__link" href="<?php echo next($menu) ?>">Find event</a></li>
      <li class="nav__element"><a class="nav__link" href="<?php echo next($menu) ?>">Reviw your events</a></li>
      <li class="nav__element"><a class="nav__link" href="<?php echo next($menu) ?>">Settings</a></li>
      <li class="nav__element"><a class="nav__link" href="<?php echo next($menu) ?>">Log out</a></li>
      <?php reset($menu) ?>
    </ul>
  </nav>
</header>