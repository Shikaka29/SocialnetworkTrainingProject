<?php defined('SYSPATH') or die('No direct script access.');?>
<!DOCTYPE html>
<html>
<head>
    <title>Документы</title>
    <style type="text/css">
        *{ margin: 0; padding: 0; }

        a:hover{ text-decoration: none; }
        #wrap{ margin: 0 auto; padding-top: 20px; width: 800px; }
        #wrap h2{ margin-bottom: 15px; }
        #wrap table{ width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        #wrap td, #wrap th{ padding: 5px; border: 1px solid #000; }
        #wrap th{ text-align: center; background: rgba(2, 98, 176, 0.61); color: #ffffff; }
        #wrap .type{ text-align: center; width: 1%; }
        #wrap .type, #wrap .name, #wrap .size, { white-space: nowrap; }
        #wrap textarea{ width: 100%; height: 100px; resize: vertical; }
        #wrap .message{ padding: 5px; border: 3px solid #00f; color: #00f; margin-bottom: 20px; }
        #wrap .error{ padding: 5px; border: 3px solid #f00; color: #f00; margin-bottom: 20px; }
        #wrap .row, #wrap label{ display: block; margin-bottom: 5px; }
        #wrap .controls{ text-align: right; }
    </style>
</head>
<div class="container2" style="margin-top:20px;">
<body>
<div id="wrap">
    <h2>Мои документы</h2>
    <table class=table">
        <tr>
            <th>Тип</th>
            <th>Название</th>
            <th>Размер</th>
            <th>Комментарий</th>
        </tr>

            <tr>

            </tr>

            <?php foreach ($files as $file) : /** @var Model_File $file **/ ?>
                <tr>
                    <td class="type"><img src="<?php echo URL::base('http') ?>public/icons/16px/<?php echo $file->type ?>.png"></td>
                    <td class="name"><a href="<?php echo URL::base('http') ?>uploads/<?php echo $file->file ?>"><?php echo $file->file ?></a></td>
                    <td class="size"><?php echo Text::bytes($file->size) ?></td>
                    <td class="desc"><?php echo HTML::chars($file->description) ?></td>
                </tr>
            <?php endforeach; ?>

    </table>
<br>
    <h2>Выберите файл</h2>

    <?php if ($message) : ?>
        <div class="message"><?php echo HTML::chars($message) ?></div>
    <?php endif; ?>
    <?php foreach ($errors as $error) : ?>
        <div class="error"><?php echo HTML::chars($error) ?></div>
    <?php endforeach; ?>

    <form action="<?php echo Route::url('default', array('controller' => 'files', 'action' => 'upload')) ?>" method="post" enctype="multipart/form-data">
        <label for="file_control">Файл</label>
        <div class="row"><input type="file" name="file" id="file_control"></div>
        <label for="description_control">Комментарий</label>
        <div class="row"><textarea rows="10" cols="10" name="description" id="description_control"></textarea></div>
        <div class="controls"><input type="submit" value="Загрузить"></div>
    </form>
</div>
</div>
</body>
</html>

