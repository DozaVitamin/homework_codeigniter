<h2 style="text-align: center; margin: 0; ">Список товаров:</h2>
<hr style="width: 800px;">
<?php foreach ($array as $item){?>
<table style="margin:auto; width: 800px; border-spacing: 10px;">
    <tr><td colspan="2"><?=$item->brand_name." ".$item->title?></td></tr>
    <tr><td colspan="2">Описание: <?=$item->description?></td></tr>
    <tr><td colspan="2">Страна-производитель: <?=$item->country?></td></tr>
    <tr><td width="50%">Цена: <?=$item->price?></td><td>Категория: <?=$item->category?></td></tr>
    <tr><td width="50%"><a href="<?=base_url()?>main_controller/updateProduct/<?=$item->identifier?>">Редактировать</a></td>
        <td><a href="<?=base_url()?>main_controller/deleteProduct/<?=$item->identifier?>">Удалить</a></td></tr>
</table>
    <hr style="width: 800px;">
<?php } ?>




