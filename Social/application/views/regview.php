<? if(isset($succes)){?>
<p style="color:green">Регистрация прошла успешно</p>
<?} ?>

<?if(isset($errors)){?>
<?foreach($errors as $item){?>
    <p style="color:red"><?=$item?></p>
<?}?>
<?}?>

<form action="" method="post">
    <div class="container">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Регистрация</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="username" id="username" class="form-control input-sm" placeholder="login">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">

                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control input-sm" placeholder="email">
                            </div>

                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="password_confirm" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
                                    </div>
                                </div>
                            </div>

                            <input type="submit" value="Зарегистрироваться" name="enter" class="btn btn-info btn-block">

                        </form>
                        <br>
                        Уже есть аккаут? <a href="<?php echo URL::site(''); ?>">Вход</a>
                    </div>

                </div>
            </div>
        </div>
    </div>