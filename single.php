<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robotics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="sass/css/style.css" rel="stylesheet">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script>
</head>

<body>

<?php include "header.php" ?>
    <div style="height: 15px;"></div>
    <div class='container'>
        <section class='container article'>
            <h2 class='article__title'>
            Второе место на WorldSkills СНГ
            </h2>
            <time class='article__time' datetime="2015-05-23">23.03.15</time>
            <p class='article__subtitle'><b>19-23 мая 2015 года в Казани (Россия) прошел чемпионат по профессиональному мастерству «WorldSkills СНГ». Наши ребята заняли второе место!</b><br><br>
            В состав команды Беларуси от Брестского государственного технического университета входили студенты факультета электронно-информационных систем Чепелев Кирилл (АС-35-IV) и Канашук Антон (AC-33-V), которые представляли нашу страну в высокотехнологичной компетенции «Мобильная робототехника». Их выступление на чемпионате оказалось весьма успешным - ребята завоевали второе место в своей компетенции, уступив команде России. <br>
            <img src='img/IMG_3901.jpg' alt='photo'> 
         </p> 
         <a class='article__back' href='index.php'>Назад</a>
         <hr class='article__line'>
        </section>
        <section class='news'>
            <div class='container'>
                <h2 class='news__title'>Читать далее</h2>
            </div>
            <div class='container d-flex flex-column align-items-center'>
                <div class="row equal">
                    <div class="news__card col-xs-12 col-sm-6 col-lg-4">
                        <div class='news__sticker'>
                            <div class="news__thumb" style="background-image: url(img/news/1.jpg);"></div>
                            <div class='news__help-container'>
                                <h3 class='news__subtitle'>Второе место на WorldSkills СНГ</h3>
                                <div class='news__descr'>19-23 мая 2015 года в Казани (Россия) прошел чемпионат по профессиональному мастерству «WorldSkills СНГ». Наши ребята заняли второе место!</div>
                                <div class='news__more'>
                                    <a href="single.php">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="news__card col-xs-12 col-sm-6 col-lg-4">
                        <div class='news__sticker'>
                            <div class="news__thumb" style="background-image: url(img/news/2.jpg);"></div>
                            <div class='news__help-container'>
                                <h3 class='news__subtitle'>Чемпионы WorldSkills 2014</h3>
                                <div class='news__descr'>19-23 мая 2015 года в Казани (Россия) прошел чемпионат по профессиональному мастерству «WorldSkills СНГ». Наши ребята заняли второе место!</div>
                                <div class='news__more'>
                                    <a href="#">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="news__card col-xs-12 col-sm-6 col-lg-4">
                        <div class='news__sticker'>
                            <div class="news__thumb" style="background-image: url(img/news/3.jpg);"></div>
                            <div class='news__help-container'>
                                <h3 class='news__subtitle'>Arduino Day 2014</h3>
                                <div class='news__descr'>19-23 мая 2015 года в Казани (Россия) прошел чемпионат по профессиональному мастерству «WorldSkills СНГ». Наши ребята заняли второе место!</div>
                                <div class='news__more'>
                                    <a href="#">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="news__card d-none d-sm-flex d-lg-none col-xs-12 col-sm-6 col-lg-4">
                        <div class='news__sticker'>
                            <div class="news__thumb" style="background-image: url(img/news/1.jpg);"></div>
                            <div class='news__help-container'>
                                <h3 class='news__subtitle'>Arduino Day 2014</h3>
                                <div class='news__descr'>19-23 мая 2015 года в Казани (Россия) прошел чемпионат по профессиональному мастерству «WorldSkills СНГ». Наши ребята заняли второе место!</div>
                                <div class='news__more'>
                                    <a href="#">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>
<?php include "footer.php" ?>
    <script src="script/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>