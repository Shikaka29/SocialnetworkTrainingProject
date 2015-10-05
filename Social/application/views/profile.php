
<html>

<head>

    <!-- Bootstrap Core CSS -->


    <!-- Custom CSS -->

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="/public/bootstrap/js/gallery/jphotogrid.js"></script>
    <script type="text/javascript" src="/public/bootstrap/js/gallery/jphotogrid.min.js"></script>
    <script type="text/javascript" src="/public/bootstrap/js/gallery/setup.js"></script>
    <link rel="stylesheet" type="text/css" href="/public/bootstrap/js/gallery/gallerystyle.css" />
    <link rel="stylesheet" type="text/css" href="/public/bootstrap/js/gallery/jphotogrid.css" />
    <link rel="stylesheet" type="text/css" href="/public/bootstrap/js/gallery/jphotogrid.ie.css" />
    <script src="/public/bootstrap/js/jquery.arcticmodal-0.3.min.js"></script>
    <link rel="stylesheet" href="/public/bootstrap/css/jquery.arcticmodal-0.3.css">
    <link rel="stylesheet" type="text/css" href="/public/bootstrap/js/bootstrap-modal.js" />
    <!-- arcticModal theme -->
    <link rel="stylesheet" href="/public/bootstrap/css/simple.css">

    <style>
        #pg { position: relative; height: 585px; border: 2px outset rgba(0, 116, 171, 0.30); border-radius: 11px; padding-top:20px;}
        #pg li { position: relative; list-style: none; width: 175px; ; overflow: hidden; float: left; z-index: 2; opacity: .8; }
        #pg li.active { opacity: 1; }
        #pg li.selected { opacity: 1; z-index: 99; -moz-box-shadow: 10px 10px 10px #66adf6; -webkit-box-shadow: 0px 0px 10px rgb(4, 107, 153); }
        #pg li img { display: block; width: 100%;height: 100%; }
        #pg li p { color: white; margin: 10px 0; font-size: 12px; }
        .modal{
            background: white;
            width: 800px;
            height: 600px;
            margin: 0 auto;
            margin-top: 50px;
        }

        .modal img{

            max-width: 500px;
            max-height: 500px;
            padding-bottom: 50px ;
            padding-left: 100px;
        }
    </style>
</head>


<body>

<!-- Navigation -->

<?php if(!empty($msg)):?>
<?php echo $msg.'<br />';?>
<?php endif;?>



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


<!-- Page Content -->

<div class="container2" style="margin-top: 20px; margin-bottom: 50px;">
    <img src="/uploads<?= $user_id; ?>.jpg"; style="width: 200px; height: 150px; left:0; " >
    <h3>Статьи от<?php echo __(' :user', array(':user' => Arr::get($item, 'username'))) ?></h3>







    <a class="button5" data-toggle="modal" href="#myModal" >Фотографии пользователя</a>



    <div class="modal fade" id="myModal">
        <div class="modal-header">
            <button class="close" data-dismiss="modal">×</button>
            <h3>Фотографии</h3>
        </div>



                <?

                $path = "uploads/$user_id/";
                if(!is_dir($path)) mkdir($path) ;

                $images = scandir($path);
                if (false !== $images) {
                    $images = preg_grep('/\\.(?:png|gif|jpe?g)$/', $images);
                    foreach ($images as $image)
                        echo
                            '<img src="/uploads/'.$user_id.'/',htmlspecialchars(urlencode($image)),'"  /> ';
                }
                ?>

    </div>


    <script>
        $('#pg').jphotogrid({
            baseCSS: {
                width: '125px',
                height: '117px',
                padding: '0px'
            },
            selectedCSS: {
                top: '50px',
                left: '100px',
                width: '500px',
                height: '360px',
                padding: '10px'
            }
        });
    </script>

    <div class="knopka2" >
        <form action="" method="POST">
            <div><a href="#open2" onclick="show('hidden_2',300,5)"><input type="button" class="button5" name="button5" value="Информация о пользователе"></a></div>
            <div id=hidden_2 style="display:none;background-color:">
                <div class="profiledata"  >
                    <form action="" id="" method="post">
                        <fieldset style=" width: 450px; float:left;">
                            <legend>Личные данные</legend>
                            <div class="form-group">
                                <label for="inputText" class="col-lg-2 control-label">Имя</label>
                                <div class="col-lg-10">
                                    <input type="text" readonly class="form-control" name="first_name" id="first_name" value="<?=$first_name?>"  placeholder="Имя">
                                </div>
                                <label for="inputText" readonly  class="col-lg-2 control-label">Фамилия</label>
                                <div class="col-lg-10">
                                    <input type="text" readonly class="form-control" name="last_name" id="last_name" value="<?=$last_name?>" placeholder="Фамилия">
                                </div>
                                <label for="inputText" readonly class="col-lg-2 control-label">Отчество</label>
                                <div class="col-lg-10">
                                    <input type="text" readonly class="form-control" name="middle_name" id="middle_name" value="<?=$middle_name?>" placeholder="Отчество">
                                </div>
                                <label for="inputText" readonly class="col-lg-2 control-label">Город</label>
                                <div class="col-lg-10">
                                    <input type="text" readonly class="form-control" <input type="text" name="city" id="city" value="<?=$city?>" placeholder="Город">
                                </div>


                            </div>

                        </fieldset>


                        <fieldset style="width: 500px;padding-bottom: 20px;padding-left: 20px; ">
                            <legend>Контакты</legend>
                            <label for="inputText" class="col-lg-2 control-label">Телефон</label>
                            <div class="col-lg-10">
                                <input type="text" readonly class="form-control" name="icq" value="<?=$icq?>" id="Телефон" placeholder="Телефон">
                            </div>
                        </fieldset>


                        <fieldset style=" width: 500px; padding-left: 20px;">
                        <legend>Дополнительно</legend>

                            <label for="inputText" class="col-lg-2 control-label">Интересы</label>
                            <div class="col-lg-10">
                                <input type="text" readonly class="form-control" name="interests" value="<?=$interests?>" id="Интересы" placeholder="Интересы">
                            </div>
                            <label for="inputText" class="col-lg-2 control-label">О себе</label>
                            <div class="col-lg-10">
                                <textarea name="about" readonly class="form-control" id="about"  rows="3" ><?=$about?></textarea>

                            </div>
                        </fieldset>

                    </form>

                </div>
            </div>
    </div>







    <div class="knopka">
        <form action="" method="POST">
            <div><a href="#open1" onclick="show('hidden_1',300,5)"><input type="button" class="button5" name="button4" value="Добавить запись"></a></div>
            <div id=hidden_1 style="display:none;background-color:">
                <br>



                <form role="form" id="contact-form" class="contact-form">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" name="title"  class="form-control" autocomplete="off" id="title" placeholder="Название">
                            </div>

                        </div>

                        <div class="col-sm-5">
                            <div class="form-group">
                                <input type="text" name="content_short" class="form-control"  autocomplete="off" id="content_short" placeholder="Краткое описание">
                            </div>

                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <input  type="hidden" name="author" value="<?=$username?>" class="form-control" autocomplete="off" id="author" placeholder="author">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <textarea class="form-control textarea" rows="3"  name="content_full"  id="content_full" placeholder="Текст"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <input type="submit" name="submit" value="Создать" class="btn main-btn pull-right"></button>
                        </div>
                    </div>
                </form>
            </div>


        </form>
    </div>



    <div class="container4">

    <script>
        $('#contact-form').bootstrapValidator({
//        live: 'disabled',
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                Name: {
                    validators: {
                        notEmpty: {
                            message: 'The Name is required and cannot be empty'
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'The email address is required'
                        },
                        emailAddress: {
                            message: 'The email address is not valid'
                        }
                    }
                },
                Message: {
                    validators: {
                        notEmpty: {
                            message: 'The Message is required and cannot be empty'
                        }
                    }
                }
            }
        });
    </script>
    <form method="POST" action="">

    </form>
                    <!--/stories-->
                    <div class="row" style="text-align: center;">

                        <?php foreach($articles as $article): ?>



                                <div style="padding:10px; margin-bottom:10px; border-bottom:#0077b0 2px solid;">
                                <div class="row">
                                    <div class="col-xs-9">
                                        <strong><?php echo $article['title']; ?></strong><br />
                                        <i>Автор: <?php echo $article['author']; ?></i> /
                                        <i>Дата публикации: <?php echo $article['date']; ?></i><br /><br />
                                        <p><?php echo $article['content_short']; ?></p>
                                        <p style="text-align:right; text-decoration:underline;">
                                            <a href="<?php echo URL::site('articles/'. $article['id'] .'-'. $article['alt_title']); ?>">Подробнее</a>
                                        </p>
                                                    </div>
                                        <div style="padding:10px;">
                                        </div>

                                    </div>
                                </div>


                        <?php endforeach; ?>
                    </div>

        </div>
</div>
        <!-- Blog Sidebar Widgets Column -->


            <!-- Side Widget Well -->

    <!-- /.row -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>



<!-- script references -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>


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

<script type="text/javascript">
    /**
     * Функция Скрывает/Показывает блок
     * @author ox2.ru дизайн студия
     **/
    function showHide(element_id) {
        //Если элемент с id-шником element_id существует
        if (document.getElementById(element_id)) {
            //Записываем ссылку на элемент в переменную obj
            var obj = document.getElementById(element_id);
            //Если css-свойство display не block, то:
            if (obj.style.display != "block") {
                obj.style.display = "block"; //Показываем элемент
            }
            else obj.style.display = "none"; //Скрываем элемент
        }
        //Если элемент с id-шником element_id не найден, то выводим сообщение
        else alert("Элемент с id: " + element_id + " не найден!");
    }
</script>
