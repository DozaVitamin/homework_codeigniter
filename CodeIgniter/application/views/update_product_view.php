<hr>
<?php echo validation_errors(); ?>
<form method="post" action="<?=base_url()?>Main_Controller/performUpdateProduct/" style="width: 600px; margin: auto">
    <h3>Изменить существующий товар:</h3>
    <input type="hidden" name="id" value="<?=$object->id?>">
    <table>
        <tr><td colspan=>Бренд:
                <select name="brand_name">
                    <?php
                    foreach ($brands as $item){
                        if($item->id == $object->brand_id){
                            echo("
                        <option value=\"$item->id\" selected>$item->brand_name</option>
                        ");
                        } else {
                            echo("
                        <option value=\"$item->id\">$item->brand_name</option>
                        ");
                        }
                    }
                    ?>
                </select>
            </td><td>Название: <input type="text" name="title" placeholder="Название" value="<?=$object->title?>" ></td></tr>
        <tr><td>Описание: </td><td><textarea name="description" rows="3" cols="50" ><?=$object->description?></textarea></td></tr>
        <tr><td>Страна-производитель:</td><td>
                <select name="manufacturer">
                    <?php
                    foreach ($manufacturers as $item){
                    if($item->id == $object->manufacturer_id){
                        echo("
                        <option value=\"$item->id\" selected>$item->country</option>
                        ");
                    } else {
                        echo("
                        <option value=\"$item->id\">$item->country</option>
                        ");
                    }
                    }
                    ?>
                </select>
            </td></tr>
        <tr><td>Цена: <input type="text" name="price" value="<?=$object->price?>"></td><td>Категория:
                <select name="category">
                    <?php
                    foreach ($categories as $item){
                    if($item->id == $object->category_id){
                        echo("
                        <option value=\"$item->id\" selected>$item->category</option>
                        ");
                    } else {
                        echo("
                        <option value=\"$item->id\">$item->category</option>
                        ");
                    }
                    }
                    ?>
                </select>
            </td></tr>
        <tr><td colspan="2"><input type="submit" value="Изменить"></td></tr>
    </table>
</form>

<hr>
