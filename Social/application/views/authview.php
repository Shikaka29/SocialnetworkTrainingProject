
<html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>NEXUS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="/public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/bootstrap/css/icomoon-social.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="/public/bootstrap/css/leaflet.css" />
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="/public/bootstrap/css/leaflet.ie.css" />
    <![endif]-->
    <link href="/public/bootstrap/css/main-green.css" rel="stylesheet" type="text/css">

    <script src="/public/bootstrap/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->


<!-- Navigation & Logo-->

    



        <div class="homepage-slider">
            <div id="sequence">
                <ul class="sequence-canvas">
                    <!-- Slide 1 -->
                    <li class="bg4">
                        <!-- Slide Title -->
                        <h2 class="title">Адаптивный</h2>
                        <!-- Slide Text -->
                        <h3 class="subtitle">Наш сайт смотрится хорошо как на ноутубках, так и планшетах и телефонах.</h3>
                        <!-- Slide Image -->
                        <img class="slide-img" src="/public/bootstrap/img/img/homepage-slider/slide1.png" alt="Slide 1" />
                    </li>
                    <!-- End Slide 1 -->
                    <!-- Slide 2 -->
                    <li class="bg3">
                        <!-- Slide Title -->
                        <h2 class="title">Присоединяйся</h2>
                        <!-- Slide Text -->
                        <h3 class="subtitle">Зарегистрируйся на нашем портале, заведи друзей, делись впечатлениями!</h3>
                        <!-- Slide Image -->
                        <img class="slide-img" src="/public/bootstrap/img/img/homepage-slider/96555234.jpg" alt="Slide 2" />
                    </li>
                    <!-- End Slide 2 -->
                    <!-- Slide 3 -->
                    <li class="bg1">
                        <!-- Slide Title -->
                        <h2 class="title">Скоро лето!</h2>
                        <!-- Slide Text -->
                        <h3 class="subtitle">Не время сидеть за компьютером! Зарегистрируйся и напиши друзьям, позови их на улицу!</h3>
                        <!-- Slide Image -->
                        <img class="slide-img" src="/public/bootstrap/img/img/homepage-slider/slide2.jpg" alt="Slide 3" />
                    </li>
                    <!-- End Slide 3 -->
                </ul>
                <div class="sequence-pagination-wrapper">
                    <ul class="sequence-pagination">
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                    </ul>
                </div>
            </div>
        </div>


    <div class="login">
        <div class="container">
            <div class="firstmessage" style="text-align: center;">
           <h2 style="color:rgb(0, 112, 176)">Приветствуем в нашей социальной сети NEXUS,здесь ты можешь завести друзей, делиться впечатлениями и просто наслаждаться общением.</h2>
                </div>
        <? if(isset($error)){?>
            <p style="color:red">Логин или пароль введены неверно.</p>
        <?} ?>

        <form action="" method="POST" style="width: 400px;;">

            <div><a href="#open1" onclick="show('hidden_1',300,5)"><input type="button" class="button4" name="button4" value="АВТОРИЗАЦИЯ"></a></div>
            <div id=hidden_1 style="display:none;height:200px;width:400px; margin: 0 auto;">

                <div id="login-form">

                    <fieldset style="padding-top:20px">
                        <form action="javascript:void(0);" method="get">
                            <input type="text" name="username" required value="Логин" onBlur="if(this.value=='')this.value='Логин'" onFocus="if(this.value=='Логин')this.value='' ">
                            <input type="password" name="password" required value="Пароль" onBlur="if(this.value=='')this.value='Пароль'" onFocus="if(this.value=='Пароль')this.value='' ">
                            <input type="submit" name="enter" value="вход">
                            <footer class="clearfix">
                                <p><span class="info">?</span><a href="/auth/RememberPassword">Забыли пароль?</a></p>
                                <p><span class="info">?</span><a href="/auth/registration">Регистрация</a></p>
                            </footer>
                        </form>
                    </fieldset>
                </div>
            </div>
        </form>

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


<div class="section">
    <div class="container">
        <h2>Что нового?</h2>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="http://social/materials/showcontent/8"><img src="/public/bootstrap/images/1.jpg" alt="Project Name"></a>
                    </div>
                    <div class="portfolio-info">
                        <ul>
                            <li class="portfolio-project-name">Наша социальная сеть открылась!</li>
                            <br>
                            <li>Присоединяйся к нам!</li>
                            <li>Заводи друзей!</li>
                            <li> Общайся!</li>
                            <li class="read-more"><a href="http://social/materials/showcontent/8" class="btn">Подробнее</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="http://social/materials/showcontent/9"><img src="/public/bootstrap/images/ANDROID.png" alt="Project Name"></a>
                    </div>
                    <div class="portfolio-info">
                        <ul>
                            <li class="portfolio-project-name">NEXUS - скоро разработка приложения для Android</li>

                            <li class="read-more"><a href="http://social/materials/showcontent/9" class="btn">Подробнее</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="http://social/materials/showcontent/10"><img src="/public/bootstrap/images/3.jpg" alt="Project Name"></a>
                    </div>
                    <div class="portfolio-info">
                        <ul>
                            <li class="portfolio-project-name">Вопросы и пожелания</li>
                            <li>Если у вас есть отличная идея или вопрос - тыкни сюда!</li>
                            <li>Не стесняйтесь!</li>
                            <li class="read-more"><a href="http://social/materials/showcontent/10" class="btn">Подробнее</a></li>
                        </ul>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>

<!-- Testimonials -->


<!-- End Testimonials -->

<!-- Our Clients -->


<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row">


            <div class="col-footer col-md-4 col-xs-6">
                <h3>Контакты</h3>
                <p class="contact-us-details">
                    <b>Address:</b> Город Москва. Княжекозловский переулок.<br/>
                    <b>Phone:</b> 892513561 <br/>
                    <b>Email:</b> <a href="mailto:Shikaka29@mail.ru">Shikaka29@mail.ru</a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="footer-copyright">&copy; 2015 NEXUS. Lepekhin Ilia. All rights reserved.</div>
            </div>
        </div>

    </div>
</div>

<!-- Javascripts -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
<script src="/public/bootstrap/js/bootstrap.min.js"></script>
<script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
<script src="/public/bootstrap/js/jquery.fitvids.js"></script>
<script src="/public/bootstrap/js/jquery.sequence-min.js"></script>
<script src="/public/bootstrap/js/jquery.bxslider.js"></script>
<script src="/public/bootstrap/js/main-menu.js"></script>
<script src="/public/bootstrap/js/template.js"></script>

</body>
</html>









