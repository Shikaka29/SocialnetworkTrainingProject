<div class="container2">

<? if(isset($errors)){?>
    <?foreach($errors as $item){?>
        <p style="color:red"><?=$item?></p>
    <?}?>
<?}?>


<?php echo View::factory('admin/block/menu') ?>
                        <table>
                            <tr>
                                <td><img src="<?php echo URL::site('/public/bootstrap/img/security.png') ?>" alt=""></td>
                                <td><i></i> <a href="<?php echo URL::site('/admin/users/') ?>"><?php echo __('Users List') ?></a><br/>
                                    <i></i> <a href="<?php echo URL::site('/admin/users/new') ?>"><?php echo __('New User') ?></a><br/>
                            </tr>
                        </table>
<br>
    <form method="post" action="">
        <select name="parentId">
            <?foreach($categories as $item) {?>
                <option value="<?=$item['id']?>"><?=str_repeat('&nbsp;', 4*$item['level']).htmlspecialchars($item['name'])?></option>
            <?}?>
        </select>

        <input class="form-control" id="focusedInput" type="text" name="categoryName" style="width:200px">
        <input class="form-control" id="focusedInput" type="text" name="url" style="width:200px">
        <input type="submit" value="Создать" name="btnsubmit">
    </form>


<div style="padding-top:50px;">
    <h2>Создать материал </h2>
    <form action="" method="post">
        <select name="categoryId">
            <?foreach($categories as $item) {?>
                <option value="<?=$item['id']?>"><?=str_repeat('&nbsp;', 4*$item['level']).htmlspecialchars($item['name'])?></option>
            <?}?>
        </select>
        <textarea name="content" id="editor"></textarea>
        <input type="submit" value="Сохранить" name="materialsavebtn">
    </form>
</div>

<script type="text/javascript">
    CKEDITOR.replace( 'editor' );
</script>

    </div>