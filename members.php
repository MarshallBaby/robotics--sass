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
    <section class='members'>
        <div class='container'>
            <h2 class='members__title'>Сотрудники</h2>
            <div class='members__wrapper'>
                <div class='row justify-content-start'>
                    <div class='col-sm-12 col-md-6 col-lg-9 justify-self-center'>
                        <div class='members__item'>
                            <div class='members__thumb' style="background-image: url(img/members/1.jpg);"></div>
                            <h3 class='members__name'>Валерий Викторович Касьяник</h3>
                            <div class='members__descr'>Руководство лабораторией, цифровой инжиниринг.<br>

                                <span class='d-none d-md-flex members__descr_sub'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec condimentum metus a pharetra elementum. Cras enim leo, malesuada et commodo in, pellentesque nec erat.</span>
                            </div>
                        </div>
                    </div>
                    <div class='col-sm-12 col-md-6 col-lg-9 justify-self-center'>
                        <div class='members__item'>
                            <div class='members__thumb' style="background-image: url(img/members/1.jpg);"></div>
                            <h3 class='members__name'>Валерий Викторович Касьяник</h3>
                            <div class='members__descr'>Руководство лабораторией, цифровой инжиниринг.<br>

                                <span class='d-none d-md-flex members__descr_sub'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec condimentum metus a pharetra elementum. Cras enim leo, malesuada et commodo in, pellentesque nec erat.</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php include "footer.php" ?>
    <script src="script/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>