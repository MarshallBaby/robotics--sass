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
    <?php @include "header.php" ?>

    <section class='excursion'>
            <div class='container'>
                <h2 class='excursion__title'>О нас</h2>
                <div class='row justify-content-start'>
                <div class=' flex-wrap d-flex justify-content-center col-sm-12 col-md-4 col-lg-3'>
                    
                    <div class='excursion__item' style="background-image: url(img/excursion/1.jpg);"> <span>Лаборатория робототехники</span>
                    <div class="excursion__dark"></div>
                    </div>
                </div>
                <div class=' flex-wrap d-flex justify-content-center col-sm-12 col-md-4 col-lg-3'>
                    
                    <div onclick="location.href = 'members.php';" class='excursion__item' style="background-image: url(img/excursion/2.jpg);"> <span>Команда </span>
                    <div class="excursion__dark"></div>
                    </div>
                </div>
                <div class=' flex-wrap d-flex justify-content-center col-sm-12 col-md-4 col-lg-3'>
                    
                    <div class='excursion__item' style="background-image: url(img/excursion/3.jpg);"> <span>История </span>
                    <div class="excursion__dark"></div>
                    </div>
                </div>
                <a class='article__back align-self-start' href='index.php'>Назад</a>
            </div>
            </div>

            
        </section>
    

    <?php include "footer.php" ?>
    <script src="script/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>    