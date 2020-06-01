<form action="">
<h1><a href="/main/add_record"> Добавить продукт</a></h1>
</form>
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