<? if(isset($error)){?>
    <p style="color:red">Адрес электронной почты не найден.</p>
<?} ?>
<? if(isset($ok)){?>
    <p style="color:green">Письмо было выслано на ваш ящик электронной почты.</p>
<?} ?>



    <script type="text/javascript">
        function runajax()
        {
            var email = $("#email").val();

            $.ajax({
                type: "POST",
                data: "email=" + email,
                url: "/ajax/emailunique",
                dataType: "json",
                success: function(data)
                {
                    if(!data.result)
                    {
                        $("#trueimg").css('display','inline');
                        $("#falseimg").css('display','none');
                    }
                    else
                    {
                        $("#falseimg").css('display','inline');
                        $("#trueimg").css('display','none');
                    }
                }
            })
        }

        $(document).ready(function(){
            $("#email").blur(runajax);
        });
    </script>

    <!DOCTYPE html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>mPurpose - Multipurpose Feature Rich Bootstrap Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/icomoon-social.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/leaflet.css" />
        <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/leaflet.ie.css" />
        <![endif]-->
        <link rel="stylesheet" href="css/main.css">

        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->


    <!-- Navigation & Logo-->



    <!-- Page Title -->
    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Восстановление пароля</h1>
                </div>
            </div>
        </div>
    </div>
            <form action="" method="post">
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="basic-login">
                        <form>
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control input-sm" placeholder="email">
                                <span id="trueimg" style="display:none"><img src="/public/bootstrap/img/true.png"></span><span id="falseimg" style="display:none"><img src="/public/bootstrap/img/false.png"></span>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Вспомнить пароль" name="enter2" class="btn btn-info btn-block">
                                <div class="clearfix"></div>
                            </div>
                        </form>
                        Уже есть аккаут? <a href="<?php echo URL::site(''); ?>">Вход</a>
                    </div>

                </div>

            </div>

        </div>

    </div>

                </form>

    <!-- Footer -->
    <div class="footer" >
        <div class="container">
            <div class="row">

                <div class="col-footer col-md-3 col-xs-6">
                    <h3>Навигация</h3>
                    <ul class="no-list-style footer-navigate-section">
                        <li><a href="/auth">Вход</a></li>
                        <li><a href="/help">Помощь</a></li>
                    </ul>
                </div>

                <div class="col-footer col-md-4 col-xs-6">
                    <h3>Контакты</h3>
                    <a class="contact-us-details" >
                        Если у вас возникли проблемы при регистрации, которые вы не смогли самостоятельно решить,
                        обращайтесь к администратору на почтовый ящик <h6>Shikaka29@mail.ru</h6>
                    </a>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-copyright">&copy; 2015 NEXUS.<br>Lepekhin Ilia. All rights reserved.</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascripts -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/jquery.sequence-min.js"></script>
    <script src="js/jquery.bxslider.js"></script>
    <script src="js/main-menu.js"></script>
    <script src="js/template.js"></script>

    </body>
    </html>