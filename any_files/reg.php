<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel = "stylesheet" href = "/vendor.css">
    <link rel = "stylesheet" href = "/main.css">
    <link rel="stylesheet" href="/main.js">
    <link rel="stylesheet" href="/vendor.js">
    <link rel="stylesheet" href="/header.html">
    <link rel="stylesheet" href="/any_files/footer.html">
    <title>Главная</title>
    <title>Document</title>
</head>
<body>
<div class="header__inner header--fixed">
    <div class="container">
        <div class="header__main">

            <div class="header__col header__center">
                <nav class="main-navigation d-none d-lg-block">
                    <ul class="mainmenu">
                        <li class="mainmenu__item menu-item-has-children position-relative">
                            <a href="/any_files/reg.php" class="mainmenu__link">Home</a>
                        </li>
                        <li class="mainmenu__item menu-item-has-children position-static">
                            <a href="#" class="mainmenu__link">Shop</a>
                            <div class="inner-menu megamenu-holder">
                                <ul class="megamenu">
                                    <li>
                                        <a class="megamenu-title" href="/main/index">Show all Product</a>
                                    </li>
                            </div>
                        </li>
                        <li class="mainmenu__item menu-item-has-children position-relative">
                            <a href="#" class="mainmenu__link">Pages</a>

                        </li>
                        <li class="mainmenu__item menu-item-has-children position-relative">
                            <a href="#" class="mainmenu__link">Blog</a>

                        </li>
                        <li class="mainmenu__item">
                            <a href="contact-us.html" class="mainmenu__link">Contact Us</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div><br><br><br><br>
<section class="page-title-area bg-color" data-bg-color="#f4f4f4" style="background-color: rgb(244, 244, 244);">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">QUANT INGELLO</h1>
            </div>
        </div>
    </div>
</section><br><br>
<style>
    body{
        font-family: 'Poppins', sans-serif;  ;
    }
    * {text-align: center;
        box-sizing: border-box;
    }
    .page {
        display: flex;
        justify-content: space-between;
        text-align: center;

    }
    .page .left {
        border-right: 3px solid #367fca;
        width: 15%;

    }
    .page .right {
        padding-left: 10px;
        width: 100%;
    }
    form span {
        display: block;
    }
</style>
<div class="left">
    <h1>Ссылки по проекту</h1>
    Регистрация: <a href="/reg/add_pers_form">Перейти</a><br>
    Авторизация: <a href="/authoriz/authoriz_form">Перейти</a><br>
    <?php if(!isset($_COOKIE['token'])) :?>
        <h3>Для просмотра последующих разделов сайта требуется авторизация!</h3>
    <?php endif ?>
    Просмотр продуктов: <a href="/main/index">Перейти</a><br>
    Просмотр голубей: <a href="/dove/index">Перейти</a>
</div>


</body>
</html>
