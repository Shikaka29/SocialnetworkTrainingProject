<?php defined('SYSPATH') or die('No direct script access.');?>
<html>
<head>

</head>
<body>
<div class="container2" style="margin-top: 20px;">
    <div id="container">
    <div id="content">

                 <h1 style="text-align:center"><?php echo __('Список пользователей') ?></h1>
    </div>

        <form class="navbar-form" role="search" action="allusers/search" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search" name="username">
            </div>
            <button type="submit" value="Найти" name="SearchGo" class="btn btn-default">Ок</button>
        </form>
                <table class="table">
                    <thead>
                    <tr>
                        <th><?php echo __('Имя') ?></th>
                        <th><?php echo __('Email') ?></th>
                        <th><?php echo __('Был в сети') ?></th>
                        <th><?php echo __('Добавить') ?></th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php if ($items->count()) : ?>
                        <?php foreach ($items as $item) : ?>
                            <tr>

                                <td>
                                    <a href="<?php echo URL::site('allusers/profile/' . $item->id) ?> "><?php echo $item->username ?></a>
                                </td>
                                <td><?php echo $item->email ?></td>
                                <td><?php echo date('Y-m-d H:i:s', $item->last_login) ?></td>
                                <td>
                                    <a href="<?= URL::site('friends/add/'.$item->id); ?>"><?php echo __('Добавить в друзья') ?></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6"><?php echo __('No items') ?></td>
                        </tr>
                    <?php endif; ?>
                    </tbody>


                </table>
</div>
</div>
</body>
</html>
