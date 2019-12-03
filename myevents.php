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
    <title>Meet Express - my events</title>
    <link href="https://fonts.googleapis.com/css?family=Fugaz+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" type='text/css' href="./css/wrapper.css">
    <link rel="stylesheet" type='text/css' href="./css/header.css">
    <link rel="stylesheet" type='text/css' href="./css/footer.css">
    <link rel="stylesheet" type='text/css' href="./css/myevents.css">
    <script src='./js/hamburger.js' defer></script>
    <script src=',/js/myevents.js' defer></script>
</head>

<body>
    <?php include './hamburgerForGuest.php'?>
    <section class="container">
        <p class="container__title">On this site you can review your all events. Enjoy your memories &#128071;</p>
        <div class="events">
            <div class="box">
                <div class="box__info">
                    <h5 class="box__date">Fri, 20.09.2019r.</h5>
                    <h2 class="box__title">Pubquiz</h2>
                    <h4 class="box__place">Wrocław plac Grunwaldzki 18 Street "Remont" Bar</h4>
                </div>
                <div class="box__botoom">
                    <h3 class="box__members">29/40</h3>
                    <form method="#">
                        <button class="box__button box__button--modify" type="submit">Modify</button>
                        <button class="box__button box__button--delete" type="button">Delete</button>
                    </form>
                </div>
            </div>
            <div class="box">
                <div class="box__info">
                    <h5 class="box__date">Thu, 24.10.2019r.</h5>
                    <h2 class="box__title">Beer with friends</h2>
                    <h4 class="box__place">Wrocław, Słodowa Island</h4>
                </div>
                <div class="box__botoom">
                    <h3 class="box__members">9/10</h3>
                    <form method="#">
                        <button class="box__button box__button--modify" type="submit">Modify</button>
                        <button class="box__button box__button--delete" type="button">Delete</button>
                    </form>
                </div>
            </div>
            <div class="box">
                <div class="box__info">
                    <h5 class="box__date">Mon, 09.12.2019r.</h5>
                    <h2 class="box__title">PHP course</h2>
                    <h4 class="box__place">Wrocław, Kazimierza Wielkiego 1 street</h4>
                </div>
                <div class="box__botoom">
                    <h3 class="box__members">29/40</h3>
                    <form method="#">
                        <button class="box__button box__button--modify" type="submit">Modify</button>
                        <button class="box__button box__button--delete" type="button">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
 <?php include './footer.php'?>
</body>

</html>