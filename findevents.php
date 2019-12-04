<!DOCTYPE html>
<html lang="en">
<?php session_start();?>

<head>
    <meta charset="UTF-8">
    <meta name="description"
        content="Meet Express application, a new way of connecting and meeting people. Create a new evenets, take part in the events in your nearby.">
    <meta name="keywords" content="meet, get to know, events">
    <meta name="author" content="Michał Wiczk, Maciej Bartosik">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meet Express - find event</title>
    <link href="https://fonts.googleapis.com/css?family=Fugaz+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" type='text/css' href="./css/wrapper.css">
    <link rel="stylesheet" type='text/css' href="./css/header.css">
    <link rel="stylesheet" type='text/css' href="./css/footer.css">
    <link rel="stylesheet" type='text/css' href="./css/findevents.css">
    <script src='./js/generateEvents.js' defer></script>
    <script src="./js/findevents.js" defer></script>
    <script src='./js/hamburger.js' defer></script>
    <script src='./js/cssOnDemand.js' defer></script>
</head>

<body>
<?php include './header.php'?>
    <section class="container" id="upper">
        <div class="search">
            <label class="search__label">Search &#128270;:
                <input class="search__input" type="search" placeholder="Search event" />
                <button id="find" class="button">Find</button>
            </label>
            <div class="search__buttons">
                <button id="refresh" class="button">Refresh</button>
                <button id="randomEvent" class="button">Choose random event</button>
            </div>
        </div>
        <div class="events">
        </div>
    </section>
    <?php include './footer.php'?>
</body>

</html>