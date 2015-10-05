

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="/public/bootstrap/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="/public/bootstrap/css/main-green.css" rel="stylesheet" type="text/css">
    <script src="<?php echo URL::base(); ?>public/bootstrap/js/jquery-1.11.2.js"></script>
    <link href="<?php echo URL::base(); ?>public/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" media="all" />
    <script src="<?php echo URL::base(); ?>public/bootstrap/js/bootstrap.min.js"></script>
    <link href="<?php echo URL::base(); ?>public/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <script src="<?php echo URL::base(); ?>public/bootstrap/js/parallaxsoon.js"></script>
    <link href="<?php echo URL::base(); ?>public/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
</head>
<body>
<div class='container2' style="width: 900px;margin: 0 auto;">
    <a href="http://social/">На главную</a>
    <hr>

<ul style="padding: 30px;">

     <?=$content?>
    <li>Категория: <?=$category?></li>

</ul>
</div>
</body>

</html>