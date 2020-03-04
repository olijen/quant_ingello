<h1>Голуби</h1>
<p>Добавить голубя в голубятню: <a href="/dove/add_dove_form">Перейти</a></p>

<?php foreach($doves as $index_dove => $dove) : ?>
        <h4 style="color: #<?= $dove['color'] ?> ">
            <?=$dove['name']?>
        </h4>

        <a href="/dove/dove_show?id=<?=$dove['id']?>">
          Перейти на страницу голубя
        </a>
    <br>
        <a href="/dove/delete_dove?id=<?=$dove['id']?>">Обезвредить голубя</a>
        <hr>
<?php endforeach; ?>