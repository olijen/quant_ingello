<h1>Продукти</h1>

<?php
    print_r($data);
    foreach($data['products'] as $index_product => $product){
        ?>
        <h4><?=$product['title']?></h4>
        <p>id: <?=$product['id']?></p>
        <p>price: <?=$product['price']?></p>
        <p>В наличии: <?=($product['isset'] == 1) ? 'есть' : 'нет';?></p>
        <a href="/main/product_show?id=<?=$product['id']?>">Перейти на страницу продукта</a>
        <hr>
<?php
    }
    ?>