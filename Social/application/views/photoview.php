

<script type="text/javascript" src="/public/bootstrap/js/gallery/jphotogrid.js"></script>
<script type="text/javascript" src="/public/bootstrap/js/gallery/jphotogrid.min.js"></script>
<script type="text/javascript" src="/public/bootstrap/js/gallery/setup.js"></script>
<link rel="stylesheet" type="text/css" href="/public/bootstrap/js/gallery/gallerystyle.css" />
<link rel="stylesheet" type="text/css" href="/public/bootstrap/js/gallery/jphotogrid.css" />
<link rel="stylesheet" type="text/css" href="/public/bootstrap/js/gallery/jphotogrid.ie.css" />


<style>
    #pg { position: relative; height: 585px; border: 2px outset rgba(0, 116, 171, 0.30); border-radius: 11px; padding-top:20px;}
    #pg li { position: relative; list-style: none; width: 175px; ; overflow: hidden; float: left; z-index: 2; opacity: .8; }
    #pg li.active { opacity: 1; }
    #pg li.selected { opacity: 1; z-index: 99; -moz-box-shadow: 10px 10px 10px #66adf6; -webkit-box-shadow: 0px 0px 10px rgb(4, 107, 153); }
    #pg li img { display: block; width: 100%;height: 100%; }
    #pg li p { color: white; margin: 10px 0; font-size: 12px; }

</style>



<script type="text/javascript">
    $(document).ready(function() {
        $("a.fancyimage").fancybox();
    });
</script>


<script type="text/javascript">
    // override Highslide settings here
    // instead of editing the highslide.js file
    hs.graphicsDir = '/public/bootstrap/js/highslide/graphics/';
</script>

<div class="container2" style="margin-top: 20px;">




<div class="zagruzka">
    <p>Выберите изоброжение для загрузки</p>
    <form id="upload-form" action="<?php echo URL::site('gallery/upload') ?>" method="post" enctype="multipart/form-data">
        <p><input type="file" name="photo" id="photo" /></p>
        <p><input type="submit" name="photo" id="submit" value="загрузить" /></p>
    </form>

</div>







    <ul id="pg">


    <?

    $path = "uploads/$userid/";
    if(!is_dir($path)) mkdir($path) ;

    $images = scandir($path);
    if (false !== $images) {
        $images = preg_grep('/\\.(?:png|gif|jpe?g)$/', $images);
        foreach ($images as $image)
            echo
                '<li><img src="/uploads/'.$userid.'/',htmlspecialchars(urlencode($image)),'"  /> </li>';
    }
    ?>
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
    </ul>
</div>





<!--'<a href="/uploads/$userid/ ,htmlspecialchars(urlencode($image))," class="highslide" onclick="return hs.expand(this)">',


