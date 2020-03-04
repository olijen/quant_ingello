<h1>Голуби</h1>

<?php foreach($doves as $index_dove => $dove) : ?>
        <h4 style="color: #<?= $dove['color'] ?> ">
            <?=$dove['name']?>
        </h4>

        <a href="/dove/dove_show?id=<?=$dove['id']?>">
          Перейти на страницу голубя
        </a>

        <hr>
<?php endforeach; ?>