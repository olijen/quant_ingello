<!doctype html>
<html lang="ru">
<head>
    <meta charset=utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<a href="/main/index">Ко всем продуктам</a>
<form action="/main/add_comment" method="get">
<h1><?=$data['product']['title']?></h1>
<p>Какой то текст для описания продукта, которий будет виден, при переходе на страницу продукта</p>
<input type="hidden" value="<?=$data['product']['id']?>" name="product_id">
<input type="hidden" name="date" value="<?php  echo date( "Y-m-d H:i:s"); ?>">
<p>Price: <?=$data['product']['price']?></p>


<p>В наличии: <?=($data['product'] == 1) ? 'есть' : 'нет';?></p>
<a href="/main/update_product_form?id=<?=$data['product']['id'] ?>">Обновить данние по продукту</a>
<br>
<a href="/main/delete_product?id=<?=$data['product']['id']?>">Удалить продукт</a><br><br>
<a href="/main/comment_show?id=<?=$data['product']['id']; ?>"> Смотреть все комментарии</a> <br><br>
<div class="col-lg-8">
    <p>
        Оставте ваш комментарий и оценку<span class="required">*</span>
    </p>
    <div class="rating-area">
        <input type="radio" id="star-5" name="rating" value="5">
        <label for="star-5" title="Оценка «5»"></label>
        <input type="radio" id="star-4" name="rating" value="4">
        <label for="star-4" title="Оценка «4»"></label>
        <input type="radio" id="star-3" name="rating" value="3">
        <label for="star-3" title="Оценка «3»"></label>
        <input type="radio" id="star-2" name="rating" value="2">
        <label for="star-2" title="Оценка «2»"></label>
        <input type="radio" id="star-1" name="rating" value="1">
        <label for="star-1" title="Оценка «1»"></label><br><br><br>


    </div><br>
    <span class="reply-title">Добавить комментарий</span>
    <form action="#" class="form pr--30">
        <div class="form__group mb--10">
            <label class="form__label d-block mb--10" for="email">Ваш
                комментарий<span class="required">*</span></label>
            <textarea name="text" id="review" class="form__input form__input--textarea"></textarea>
        </div>
        <div class="form__group mb--20">
            <label class="form__label d-block mb--10" for="name">Name<span class="required">*</span></label>
            <input type="text" name="name" id="name" class="form__input">
        </div>
        <div class="form__group mb--20">
            <label class="form__label d-block mb--10" for="email">Ваш Email<span class="required">*</span></label>
            <input type="email" name="email" id="email" class="form__input">
        </div>
        <div class="form__group">
            <div class="form-row">
                <div class="col-12">
                    <input type="submit" value="Submit Now" class="btn btn-size-md">
                </div>
            </div>
        </div>
    </form>
</div>
</form><br>

<style>
    .rating-area {
        overflow: hidden;
        margin: auto;
        width: 250px;

    }
    .rating-area:not(:checked) > input {
        display: none;
    }
    .rating-area:not(:checked) > label {
        float: right;
        width: 42px;
        padding: 0;
        cursor: pointer;
        font-size: 40px;
        line-height: 50px;
        color: lightgrey;
        text-shadow: 1px 1px #bbb;
    }
    .rating-area:not(:checked) > label:before {
        content: '★';
    }
    .rating-area > input:checked ~ label {
        color: black;
        text-shadow: 1px 1px #c60;
    }
    .rating-area:not(:checked) > label:hover,
    .rating-area:not(:checked) > label:hover ~ label {
        color: black;
    }
    .rating-area > input:checked + label:hover,
    .rating-area > input:checked + label:hover ~ label,
    .rating-area > input:checked ~ label:hover,
    .rating-area > input:checked ~ label:hover ~ label,
    .rating-area > label:hover ~ input:checked ~ label {
        color: black;
        text-shadow: 1px 1px goldenrod;
    }
    .rate-area > label:active {
        position: absolute  ;
    }
</style>
</body>
</html>