<?php defined('SYSPATH') or die('No direct script access.');?>

<form action="<?php echo URL::site('/admin/users/save') ?>" method="post" name="user-form">
    <div>
        <div>
            <fieldset>
                <legend><?php echo __('Common') ?></legend>

                <div>
                    <label for="username"><?php echo __('User name') ?>:</label>
                    <div>
                        <input type="text" name="username" id="username" value="<?php echo Arr::get($item, 'username') ?>"/>
                    </div>
                </div>

                <div>
                    <label for="email"><?php echo __('Email') ?>:</label>
                    <div>
                        <input type="text" name="email" id="email" value="<?php echo Arr::get($item, 'email') ?>"/>

                    </div>
                </div>

                <div>
                    <label for="password"><?php echo __('Password') ?>:</label>
                    <div>
                        <input type="password" name="password" id="password"/>



                    </div>
                </div>

                <div>
                    <label for="password_confirm"><?php echo __('Password confirm') ?>:</label>
                    <div>
                        <input type="password" name="password_confirm" id="password_confirm"/>

                    </div>
                </div>
            </fieldset>
        </div>
        <div>
            <fieldset>
                <legend><?php echo __('Access') ?></legend>
                <div>
                    <label><?php echo __('Roles') ?></label>
                    <?php foreach ($roles as $role) : ?>
                        <label>
                            <?php echo $role->name ?>
                            <input id="role<?php echo $role->id ?>" type="checkbox" name="roles[]" value="<?php echo $role->id ?>"
                                <?php if (in_array($role->id, Arr::get($item, 'roles',array()))) : ?> checked="checked" <?php endif ?>/>
                        </label>
                    <?php endforeach; ?>
                </div>
            </fieldset>
        </div>
    </div>
    <div>
        <div>
            <div>
                <input type="submit" name="back" value="<?php echo __('Back') ?>" />
                <input type="submit" name="save" value="<?php echo __('Save') ?>" />
            </div>
        </div>

        <input type="hidden" name="id" value="<?php echo Arr::get($item, 'id') ?>">
    </div>
</form>