
<form action="/main/update_product" method="post" >

    Форма обновления продукта<br>
    <input type="hidden" name="id" value="<?=$_GET['id']?>">
    <?=$data?>
    <input type="submit" /><br>
</form>
