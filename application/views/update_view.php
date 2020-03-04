
<form action="<?=$data['path']?>" method="post" >

    Форма обновления продукта<br>
    <input type="hidden" name="id" value="<?=$_GET['id']?>">
    <?=$data['htmlForm']?>
    <input type="submit" /><br>
</form>
