
<div class="container2" style="margin-top:20px;">

<div id="search">
    <form method="post" action="">
        <h3 style="font-size: 16px; font-family: Verdana;">Поиск пользователя: </h3>
        <input type="text" name="username" /><input type="submit" value="Найти" name="SearchGo" /></form>
    <?php if(isset($findok))
         {
        echo "<p style=\"color: green;\">Результат: </p>";
        foreach($name as $item) {
            echo $item['username']."<br />";}
        }
    else
        echo "Ничего не найдено";?></div><div id="clear"></div>

    </div>