    <!--<form action="/main/add_record_form" method="post">-->
    <!--    <input type="submit" value="-->
    <!--Добавить Продукт" class="btn btn-size-md">-->
    <!--</form>-->
    <section class="page-title-area bg-color" data-bg-color="#f4f4f4" style="background-color: rgb(244, 244, 244);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">QUANT INGELLO</h1>
                </div>
            </div>
        </div>
    </section><br><br>
<h1>Продукти</h1>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">

<?php


    foreach($data['products'] as $index_product => $product){
        ?>
        <h4><?=$product['title']?></h4>
        <p>id: <?=$product['id']?></p>
        <p>price: <?=$product['price']?></p>
        <p>В наличии: <?=($product == 1) ? 'есть' : 'нет';?></p>
        <a href="/main/product_show?id=<?=$product['id']?>">Перейти на страницу продукта</a>
        <hr>
<?php
    }
    //if isset get parametres products and page, then show {products} quantity products and links to pages
    ?>