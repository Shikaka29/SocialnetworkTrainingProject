



<div class="container2" style="margin-top:20px;margin-bottom: 20px;">
<!-- Вывод сообщения об успешной смене пароля -->
<h2 style="text-align:center">Личный кабинет</h2>
<p style="text-align:center">Имя пользователя: <?=$username?><br> Email: <?=$email?> <br> <a href="/auth/logout" class="btn">Выйти</a></p>
</div>
<div class="container2">
<div class="accountavatar">


    <? if (file_exists(DOCROOT.'uploads'.$user_id.'.jpg')): ?>
        <h3>Ваша  аватарка</h3>
        <img src="/uploads<?= $user_id; ?>.jpg">
    <? endif; ?>

    <form id="upload-form" action="<?php echo URL::site('avatar/upload') ?>" method="post" enctype="multipart/form-data">
        <p><input type="file" name="avatar" id="avatar" /></p>
        <p><input type="submit" name="fupload" id="submit" value="загрузить" /></p>
    </form>
</div>
<br>




<div class="profiledata">
    <form action="" id="" method="post">
    <fieldset>
        <legend>Личные данные</legend>
        <div class="form-group">
            <label for="inputText" class="col-lg-2 control-label">Имя</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="first_name" id="first_name" value="<?=$first_name?>"  placeholder="Имя">
            </div>
            <label for="inputText" class="col-lg-2 control-label">Фамилия</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="last_name" id="last_name" value="<?=$last_name?>" placeholder="Фамилия">
            </div>
            <label for="inputText" class="col-lg-2 control-label">Отчество</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="middle_name" id="middle_name" value="<?=$middle_name?>" placeholder="Отчество">
            </div>
            <label for="inputText" class="col-lg-2 control-label">Город</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" <input type="text" name="city" id="city" value="<?=$city?>" placeholder="Город">
            </div>


        </div>

    </fieldset>
        <br>

        <fieldset>
        <legend>Контакты</legend>
            <label for="inputText" class="col-lg-2 control-label">Телефон</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="icq" value="<?=$icq?>" id="Телефон" placeholder="Телефон">
            </div>
        </fieldset>


<br>
        <legend>Дополнительно</legend>
        <fieldset>
            <label for="inputText" class="col-lg-2 control-label">Интересы</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="interests" value="<?=$interests?>" id="Интересы" placeholder="Интересы">
            </div>
            <label for="inputText" class="col-lg-2 control-label">О себе</label>
            <div class="col-lg-10">
                <textarea name="about" class="form-control" id="about"  rows="3" ><?=$about?></textarea>
                <span class="help-block">Расскажите пару слов о себе.</span>
            </div>
        </fieldset>
        <input class="btn btn-primary btn-lg" type="submit" value="Сохранить" name="enter3" />
</form>

</div>

    <div><a href="#open1" onclick="show('hidden_1',300,5)"><input type="button" class="button4" name="button4" value="Сменить пароль"></a></div>
    <div id=hidden_1 style="display:none;height:200px;width:400px;background-color:">
<div class="passwordtable">
<form action="" method="post">

    <table class="table table-striped table-hover">

        <tr>

            <td style="text-align: right">Старый пароль:</td>
            <td><input type="password" name="oldpass" id="oldpass"></td>
            <td>
                <span style="display: none" id="oldpassok"><img src="/public/bootstrap/img/true.png" title="Старый пароль введен правильно" alt="Старый пароль введен правильно"></span>
                <span style="display: none" id="oldpasserror"><img src="/public/bootstrap/img/false.png" title="Ошибка в старом пароле" alt="Ошибка в старом пароле"></span>
            </td>
        </tr>
        <tr>
            <td style="text-align: right">Новый пароль:</td>
            <td><input type="password" name="newpass1" id="newpass1"></td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td style="text-align: right">Повторите новый пароль:</td>
            <td><input type="password" name="newpass2" id="newpass2"></td>
            <td>
                <span style="display: none" id="newpassmatchesok"><img src="/public/bootstrap/img/true.png" title="Пароли совпадают" alt="Пароли совпадают"></span>
                <span style="display: none" id="newpassmatcheserror"><img src="/public/bootstrap/img/false.png" title="Пароли несовпадают" alt="Пароли несовпадают"></span>
            </td>
        </tr>
        <tr>
            <td><b></b> <input type="checkbox" id="showpassbtn"><label for="showpassbtn"> Показать пароль </label></td>
            <td><input type="submit" value="Сохранить новый пароль" name="btnsubmit"></td>
        </tr>
        <tr>

        </tr>

    </table>
</form>

<?if(isset($newpassok)){?>
    <p style="text-align:center; color:green;">
        Новый пароль успешно сохранен
    </p>
<?}?>
<!-- /Вывод сообщения об успешной смене пароля -->

<!-- Вывод ошибок валидации при сохранении нового пароля -->
<? if(isset($errors)){?>
    <?foreach($errors as $item){?>
        <p style="color:red"><?=$item?></p>
    <?}?>
<?}?>
    </div>
        </div>
    </div>


<script type="text/javascript">

    function checkOldPass()
    {
        var oldpass = $("#oldpass").val();

        $.ajax({
            type: "POST",
            data: "oldpass=" + oldpass,
            url: "/ajax/checkOldPass",
            dataType: "json",
            success: function(data)
            {
                if(data.result)
                {
                    $("#oldpassok").css('display','inline');
                    $("#oldpasserror").css('display','none');
                }
                else
                {
                    $("#oldpasserror").css('display','inline');
                    $("#oldpassok").css('display','none');
                }
            }
        })
    }

    function showPass()
    {
        //var checked = $("#showpassbtn").attr('checked');

        if (showpassbtn.checked)
        {
            document.getElementById('oldpass').type = 'text';
            document.getElementById('newpass1').type = 'text';
            document.getElementById('newpass2').type = 'text';
        }
        else
        {
            document.getElementById('oldpass').type = 'password';
            document.getElementById('newpass1').type = 'password';
            document.getElementById('newpass2').type = 'password';
        }
    }

    function matchesPass()
    {
        if($("#newpass1").val() == $("#newpass2").val())
        {
            $("#newpassmatchesok").css('display','inline');
            $("#newpassmatcheserror").css('display','none');
        }
        else
        {
            $("#newpassmatcheserror").css('display','inline');
            $("#newpassmatchesok").css('display','none');

        }
    }

    $(document).ready(function(){
        $("#oldpass").blur(checkOldPass);
        $("#showpassbtn").click(showPass);
        $("#newpass2").keyup(matchesPass);
    });


</script>

    <script language="JavaScript" type="text/javascript">
        /*<![CDATA[*/
        var s=[],s_timer=[];
        function show(id,h,spd)
        { s[id]= s[id]==spd? -spd : spd;
            s_timer[id]=setTimeout(function() {
                var obj=document.getElementById(id);
                if(obj.offsetHeight+s[id]>=h){obj.style.height=h+"px";obj.style.overflow="auto";}
                else if(obj.offsetHeight+s[id]<=0){obj.style.height=0+"px";obj.style.display="none";}
                else {obj.style.height=(obj.offsetHeight+s[id])+"px";
                    obj.style.overflow="hidden";
                    obj.style.display="block";
                    setTimeout(arguments.callee, 10);
                }
            }, 10);
        }
        /*]]>*/
    </script>

    </div>
    </div>
