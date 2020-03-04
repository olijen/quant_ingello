<a href="/main/index">Ко всем продуктам</a>

<h1><?=$data['product']['title']?></h1>
<p>Какой то текст для описания продукта, которий будет виден, при переходе на страницу продукта</p>
<p>Id: <?=$data['product']['id']?></p>
<p>Price: <?=$data['product']['price']?></p>
<p>В наличии: <?=($data['product']['isset'] == 1) ? 'есть' : 'нет';?></p>
<a href="/main/update_product_form?id=<?=$data['product']['id']?>">Обновить данние по продукту</a>
<br>
<a href="/main/delete_product?id=<?=$data['product']['id']?>">Удалить продукт</a>