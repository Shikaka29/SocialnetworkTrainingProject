<ul>

</ul>

<!-- Вывод сообщения об успешной смене пароля -->
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
<!-- / Вывод ошибок валидации при сохранении нового пароля -->

<h2>Личный кабинет пользователя</h2>
<p>Имя пользователя: <?=$username?> email: <?=$email?></p>


<h1>Выберите аватарку</h1>
<form id="upload-form" action="<?php echo URL::site('avatar/upload') ?>" method="post" enctype="multipart/form-data">
    <p><input type="file" name="avatar" id="avatar" /></p>
    <p><input type="submit" name="fupload" id="submit" value="загрузить" /></p>
</form>





<p><b>Если хотите сменить пароль:</b> <input type="checkbox" id="showpassbtn"><label for="showpassbtn"> Показать пароль </label></p>
<form action="" method="post">
    <table class="changepassword">
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
            <td>&nbsp;</td>
            <td><input type="submit" value="Сохранить новый пароль" name="btnsubmit"></td>
        </tr>
    </table>
</form>


<a href="/auth/logout" class="btn">Выйти</a>


<form action="" id="login" method="post">
    <fieldset>
        <legend>Личные данные</legend>
        <ol>
            <li>
                <label for="first_name">Фамилия </label>
                <input type="text" name="first_name" id="first_name" value="<?=$first_name?>" size="20" maxlength="127"" />
            </li>
            <li>
                <label for="last_name">Имя </label>
                <input type="text" name="last_name" id="last_name" value="<?=$last_name?>" size="20" maxlength="127" " />
            </li>
            <li>
                <label for="middle_name">Отчество </label>
                <input type="text" name="middle_name" id="middle_name" value="<?=$middle_name?>"size="20" maxlength="127"" />
            </li>
            <li>
                <label for="city">Город </label>
                <input type="text" name="city" id="city" value="<?=$city?>"size="20" maxlength="127" " />
            </li>
        </ol>
    </fieldset>
    <fieldset>
        <legend>Контакты</legend>
        <ol>
            <li>
                <label for="website">Сайт </label>
                <input type="text" name="website" value="<?=$website?>" id="website">
            </li>
            <li>
                <label for="icq">ICQ </label>
                <input type="text" name="icq" value="<?=$icq?>" id="icq">
            </li>
            <li>

            </li>
        </ol>
    </fieldset>
    <fieldset>
        <legend>Дополнительно</legend>
        <ol>
            <li>
                <label for="interests">Интересуюсь </label>
                <input type="text" name="interests" value="<?=$interests?>" id="interests">
            </li>
            <li>
                <label for="about">О себе </label>
                <textarea name="about" id="about"  rows="3" ><?=$about?></textarea>
            </li>
            <li><input type="submit" value="Сохранить" name="enter3" /></li>
        </ol>
    </fieldset>
</form>

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