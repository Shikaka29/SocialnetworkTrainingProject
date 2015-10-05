
<!DOCTYPE html>
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
	<script type="text/javascript" src="/public/bootstrap/js/cookie.js"></script>
	<link href="<?php echo URL::base(); ?>public/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
	<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="/public/bootstrap/js/highslide/highslide.js"></script>
	<link rel="stylesheet" type="text/css" href="/public/bootstrap/js/highslide/highslide.css" />
	<script type="text/javascript">
		// override Highslide settings here
		// instead of editing the highslide.js file
		hs.graphicsDir = '/highslide/graphics/';
	</script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<script src="../../docs-assets/js/respond.min.js"></script>
	<![endif]-->
	<link href="/public/bootstrap/css/modal.css" rel="stylesheet" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>$(document).ready(function() {	$('a[name=modal]').click(function(e) {		e.preventDefault();		var id = $(this).attr('href');		var maskHeight = $(document).height();		var maskWidth = $(window).width();		$('#mask').css({'width':maskWidth,'height':maskHeight});		$('#mask').fadeIn(1000);		$('#mask').fadeTo("slow",0.8);		var winH = $(window).height();		var winW = $(window).width();		$(id).css('top',  winH/2-$(id).height()/2);		$(id).css('left', winW/2-$(id).width()/2);		$(id).fadeIn(2000);	});	$('.window .close').click(function (e) {		e.preventDefault();		$('#mask, .window').hide();	});	$('#mask').click(function () {		$(this).hide();		$('.window').hide();	});});</script>


	<link rel="stylesheet" href="/public/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/public/bootstrap/css/icomoon-social.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="/public/bootstrap/css/leaflet.css" />
	<!--[if lte IE 8]>
	<link rel="stylesheet" href="/public/bootstrap/css/leaflet.ie.css" />
	<![endif]-->

	<script src="/public/bootstrap/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->


<!-- Navigation & Logo-->
<div class="mainmenu-wrapper">
	<div class="container">

		<nav id="mainmenu" class="mainmenu">


			<script>
				// Выбор своего фона страницы by Apocalypse
				$(window).load(function() {
					$('#apoinput').keydown(function(apo) {
						var apoval = $(this).val();
						var aposub = apoval.substr(-4, 4);
						if(apo.keyCode==13) {
							if(aposub=='.gif' || aposub=='.png' || aposub=='.jpg' || aposub=='jpeg') {
								setCookie('apoimg', apoval, 365);
								$('#apoback').html('<img src="'+getCookie('apoimg')+'" width="100%" height="100%" style="position:fixed;z-index:-1;top:0px;left:0px;" />');
							} else {
								_uWnd.alert('Неправильный формат изображения', 'Ошибка', {w:250, h:65});
							};
						};
					});
					if(getCookie('apoimg')) {
						$('#apoback').html('<img src="'+getCookie('apoimg')+'" width="100%" height="100%" style="position:fixed;z-index:-1;top:0px;left:0px;" />');
					};
				});
				// (c) 2011
			</script>


			<ul>
				<li class="logo-wrapper"><a href="/"><img src="/public/bootstrap/img/Logo.png" alt="Multipurpose Twitter Bootstrap Template"></a></li>
				<li class="has-submenu active">
					<a href="#">Моя страница +</a>
					<div class="mainmenu-submenu">
						<div class="mainmenu-submenu-inner">
							<div>

								<ul>

									<li><a href="/account">Мой аккаунт</a></a></li>
									<li> <a href="<?php echo URL::site('allusers/profile/' . $userid) ?> ">Моя стена</a></li>
									<li><a href="/files">Мои документы</a></a></li>
									<li><a href="/photo">Мои фотографии</a></a></li>
								</ul>
							</div>
							<form class="navbar-form navbar-left" role="search" action="allusers/search" method="post">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search" name="username">
								</div>
								<button type="submit" value="Найти" name="SearchGo" class="btn btn-default">Ок</button>
							</form>
						</div><!-- /mainmenu-submenu-inner -->
					</div><!-- /mainmenu-submenu -->
				<li><a href="/">Главная</a></li>
				<li><a href="/friends">Друзья</a></li>
				<li><a href="/allusers">Люди</a></li>
				<li><a href="/help">Помощь</a></li>
				<li><a href="/auth/logout">Выход</a></li>

			</ul>

		</nav>

	</div>

</div>
<!-- Page Title -->

<!-- Footer -->



<div class="container">

	<div class="padding">

	</div>

	<div id="contaner">
		<div id="content">
			<?php echo $content ?>

		</div>
		<div style="clear:both"></div>

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

<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-footer col-md-3 col-xs-6">
				<h3>Навигация</h3>
				<ul class="no-list-style footer-navigate-section">
					<li><a href="page-blog-posts.html">О нас</a></li>
					<li><a href="page-faq.html">FAQ</a></li>
				</ul>
			</div>

			<div class="col-footer col-md-4 col-xs-6">
				<h3>Контакты</h3>
				<p class="contact-us-details">
					<b>Address:</b> Город Москва. Княжекозловский переулок.<br/>
					<b>Phone:</b> 892513561 <br/>
					<b>Email:</b> <a href="mailto:Shikaka29@mail.ru">Shikaka29@mail.ru</a>
				</p>
			</div>
			<div class="col-footer col-md-4 col-xs-6">
				<h3>Выбрать фон для сайта</h3>
				<p class="contact-us-details">
					<p>Скопируйте ссылку на любимую картинку сюда и нажмите ENTER и она станет вашим фоном!
				</p>
				<div id="apoback"></div><input type="text" id="apoinput" placeholder="Ссылка на картинку" style="" />

			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="footer-copyright">&copy; 2015 NEXUS. Lepekhin Ilia. All rights reserved.</div>
			</div>
		</div>

	</div>

</div>
</body>
</html>


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











