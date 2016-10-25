<hr>
<?php echo validation_errors(); ?>
<form method="post" action="<?=base_url()?>main_controller/addProduct/" style="width: 600px; margin: auto">
    <h3>Добавить новый товар:</h3>
    <table>
        <tr><td colspan=>Бренд:
                <select name="brand_name">
                    <?php
                    foreach ($brands as $item){
                        echo ("
                        <option value=\"$item->id\">$item->brand_name</option>
                        ");
                    }
                    ?>
                    </select>
            </td><td>Название: <input type="text" name="title" placeholder="Название" value="<?=set_value('title')?>" ></td></tr>
        <tr><td>Описание: </td><td><textarea name="description" rows="3" cols="50" ><?=set_value('description')?></textarea></td></tr>
        <tr><td>Страна-производитель:</td><td>
                <select name="manufacturer">
                    <?php
                    foreach ($manufacturers as $item){
                        echo ("
                        <option value=\"$item->id\">$item->country</option>
                        ");
                    }
                    ?>
                </select>
            </td></tr>
        <tr><td>Цена: <input type="text" name="price" value="<?=set_value('price')?>"></td><td>Категория:
                <select name="category">
                    <?php
                    foreach ($categories as $item){
                        echo ("
                        <option value=\"$item->id\">$item->category</option>
                        ");
                    }
                    ?>
                </select>
            </td></tr>
        <tr><td colspan="2"><input type="submit" value="Добавить"></td></tr>
    </table>
</form>

<hr>
