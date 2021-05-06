<!DOCTYPE html>
<html lang="cn">

<head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#000"/>
    <meta name="viewport" content="width=device-width"/>
    <!--[if lt IE 9]> <script src="js/css3-mediaqueries.js"></script> <![endif]-->
    <link rel="icon" type="image/png" href="https://www.topciment.com/favicon.png"/>
    <meta name="Language" content="CN"/>


    <?php include("../../assets/includes/styles.php"); ?>
    <link rel="preload" href="../../assets/css/proyecto.css" as="style"/>
    <link rel="stylesheet" href="../../assets/css/proyecto.css"/>


    <title>餐厅的微水泥涂层</title> <meta name="description" content="乌克兰餐厅微水泥地面涂层令人难以置信的美丽结果的照片"/> 
 
    <link rel="canonical" href="https://www.topciment.com/cn/jihua/fotos-revestimientos-microcemento-en-restaurante"/>

 <link rel="alternate" href="https://www.topciment.com/cn/jihua/fotos-revestimientos-microcemento-en-restaurante" hreflang="zh-CN"/>


    <?php include("../../assets/includes/scripts-head.php"); ?>
</head>

<body id="proyecto">

    <?php include("../includes/header.php"); ?>


    <?php include("../includes/menu-movil.php"); ?>


    <div id="main">
        <div class="fullscreen background parallax" style="background-image:url('https://www.topciment.com/imagenes/ucrania/revestimiento-con-topciment-microcemento-ucrania.jpg');" data-img-width="1500" data-img-height="1000" data-diff="100">
            <div class="content-a" id="up">

            </div>
        </div>
        <div class="container">
            <div id="sidebar" class="menuOculto menuMicrocementos stick">
                <ul>
                    <li>
                        <p><a href="#up" style="font-size:26px">项目</a></p>
                    </li>
                    <li><a href="../zuoping">回到作品</a></li>
                </ul>
            </div>
            <div class="content">
                <h1 id="suelosDeMicrocementoGaleriaH1" class="wow fadeInLeft" style="width:100%">餐馆中的Topciment微水泥覆盖层</h1>
                <h2 id="galeriaH2" class="wow fadeInLeft justificado">Kiev, Ucrania<br>
                    Restaurante NAM </h2>
                <div id="fotoAnchoTotal" class="wow fadeInRight" style="float:left">
                    <img src="https://www.topciment.com/imagenes/ucrania/revestimiento-con-topciment-microcemento-ucrania-0.jpg" alt="Topciment" width="100%">
                </div>
                <div id="separador20px"></div>
                <div class="wow fadeInLeft" style="float:left; width:49%;">
                    <img src="https://www.topciment.com/imagenes/ucrania/revestimiento-con-topciment-microcemento-ucrania-1.jpg" alt="Topciment" width="100%">
                </div>
                <div class="wow fadeInRight" style="float:right; width:49%;">
                    <img src="https://www.topciment.com/imagenes/ucrania/revestimiento-con-topciment-microcemento-ucrania-2.jpg" alt="Topciment" width="100%">
                </div>
                <div id="separador20px"></div>
                <div id="fotoAnchoTotal" class="wow fadeInLeft" style="float:left;">
                    <img src="https://www.topciment.com/imagenes/ucrania/revestimiento-con-topciment-microcemento-ucrania-4.jpg" alt="Topciment" width="100%">
                </div>
                <div id="separador20px"></div>
                <div id="fotoAnchoTotal" class="wow fadeInLeft" style="float:left">
                    <img src="https://www.topciment.com/imagenes/ucrania/revestimiento-con-topciment-microcemento-ucrania-7.jpg" alt="Topciment" width="100%">
                </div>
                <div id="separador20px"></div>
                <div id="fotoAnchoTotal" class="wow fadeInLeft" style="float:left; ">
                    <img src="https://www.topciment.com/imagenes/ucrania/revestimiento-con-topciment-microcemento-ucrania-8.jpg" alt="Topciment" width="100%">
                </div>
                <div id="separador20px"></div>
            </div>

        </div>
        <input type="text" name="city" id="city"/> 
                       
        <div id="separador50px">
        </div>
        <?php include "../includes/footer.php"; ?>

        <?php include("../../assets/includes/scripts.php"); ?>
         <script type="text/javascript">
                        /*     var city = document.getElementById("city");
                            $.get("https://ipinfo.io", function(response) 
                            { city.value =(response.city);}, "jsonp");
                      console.log(response.city);   */
                      $.get("https://ipinfo.io", function(response) {
    console.log(response.city, response.country);}, "jsonp");
                        </script>
    </div>

    <!-- include jQuery -->

</body>

</html>