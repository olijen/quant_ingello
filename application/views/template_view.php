<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Главная</title>
    <style>
        * {
            box-sizing: border-box;
        }
        .page {
            display: flex;
            justify-content: space-between;
        }
        .page .left {
            border-right: 3px solid #367fca;
            width: 15%;
        }
        .page .right {
            padding-left: 10px;
            width: 85%;
        }
        form span {
            display: block;
        }
    </style>
</head>
<body>
    <div class="page">
        <div class="left">
            <h1>Ссилки по проекту</h1>
            Регистрация: <a href="/reg/add_pers_form">Перейти</a>
            Авторизация: <a href="/authoriz/authoriz_form">Перейти</a>
            <?php if(!isset($_COOKIE['token'])) :?>
                <h3>Для просмотра последующих разделов сайта требуется авторизация!</h3>
            <?php endif ?>
            Просмотр продуктов: <a href="/main/index">Перейти</a>
            Просмотр голубей: <a href="/dove/index">Перейти</a>
        </div>
        <div class="right">
            <?php  include 'application/views/'.$content_view; ?>
        </div>
    </div>
</body>
</html>