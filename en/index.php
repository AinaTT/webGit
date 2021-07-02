<!DOCTYPE html>
<html lang="en-GB">

<head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#000" />
    <meta name="viewport" content="width=device-width" />

    <link rel="icon" type="image/png" href="https://www.topciment.com/favicon.png" />
    <meta name="Language" content="EN" />

    <link rel="preload" href="../assets/css/home.css" as="style" />
    <link rel="stylesheet" href="../assets/css/home.css" />
    <?php include("../assets/includes/root-styles.php"); ?>

    <title>Microcement for decorative coatings</title>
    <meta name="description"
        content="Microcemento Topciment for all types of surfaces and rooms. We offer many products for the care and maintenance of Microcemento. Discover all we can do for you!" />
    <meta property="og:locale" content="en_EN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Microcement for decorative coatings" />
    <meta property="og:description"
        content="Microcemento Topciment for all types of surfaces and rooms. We offer many products for the care and maintenance of Microcemento. Discover all we can do for you!" />
    <meta property="og:url" content="https://www.topciment.com/en/" />
    <meta property="og:site_name" content="Topciment" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description"
        content="Microcemento Topciment for all types of surfaces and rooms. We offer many products for the care and maintenance of Microcemento. Discover all we can do for you!" />
    <meta name="twitter:title" content="Microcement for decorative coatings" />
    <meta name="twitter:site" content="@topciment" />
    <meta name="twitter:creator" content="@topciment" />
    <meta property="article:publisher" content="https://www.facebook.com/topciment.microcements/" />


    <link rel="canonical" href="https://www.topciment.com/en/" />

    
    <link rel="alternate" href="https://www.topciment.com/es/" hreflang="es-ES" />
    <link rel="alternate" href="https://www.topciment.com/en/" hreflang="en-GB" />
    <link rel="alternate" href="https://www.topciment.com/fr/" hreflang="fr-FR" />
    <link rel="alternate" href="https://www.topciment.com/de/" hreflang="de-DE" />
    <link rel="alternate" href="https://www.topciment.com/it/" hreflang="it-IT" />
    <link rel="alternate" href="https://www.topciment.com/nl/" hreflang="nl-NL" />
    <link rel="alternate" href="https://www.topciment.com/gr/" hreflang="el-GR" />
    <link rel="alternate" href="https://www.topciment.ru/" hreflang="ru-RU" />
    <link rel="alternate" href="https://www.topciment.com/en-us/" hreflang="en-US" />


    <link rel="preload" href="../assets/css/home.css" as="style" />
    <link rel="stylesheet" href="../assets/css/home.css" />

    <script src="https://www.topciment.com/js/jquery.min.js"></script>
    <script src="https://www.topciment.com/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://www.topciment.com/js/scrolloverflow.js"></script>
    <script type="text/javascript" src="https://www.topciment.com/js/jquery.fullPage.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#fullpage').fullpage({

                anchors: ['microcemento', 'sttandard', 'unlimitted', 'evoluttion', 'atlanttic',
                    'efectto',
                    'pure-mettal', 'elitte', 'oxide',
                    'galeria', 'profesionales', 'noticias', 'contacto', 'footer'
                ],
                scrollOverflow: true
                /*normalScrollElements:'#section9' */

            });
        });

        var $isAnimatedSecond = $('.second .is-animated'),
            $isAnimatedSecondSingle = $('.second .is-animated__single');

        /* this code is part of the onLeave callback */
        if (index == 1 && nextIndex == 2) {
            $isAnimatedSecond.addClass('animated fadeInUpBig');
            $isAnimatedSecond.eq(0).css('animation-delay', '.3s');
            $isAnimatedSecond.eq(1).css('animation-delay', '.6s');
            $isAnimatedSecond.eq(2).css('animation-delay', '.9s');
            $isAnimatedSecondSingle.addClass('animated rollIn').css('animation-delay', '1.7s');
        }
    </script>
    <?php include("../assets/includes/root-scripts-head.php"); ?>
</head>

<body>
    <?php include("includes/root-header.php"); ?>
    <?php include("includes/root-menu-movil.php"); ?>
    <div id="fullpage">
        <div class="section fullscreen background parallax" id="section0">
            <div class="content-a" onClick="location.href='microcement'" style="cursor:pointer;">
                <div class="contenedorTexto">
                    <div id="texto-microcemento" class=" content-b textoArribaDerecha contenedorHome texto40pixeles"
                        style="text-align:right;"  >
                        <h1 class="enHome3 br1">IT'S MORE THAN <span class="negrita">MICROCEMENT,</span><br>IT'S <span
                                class="negrita">TOPCIMENT</span></h1>
                        <h2 class="txHome2 br1"> At Topciment, excellence leads the way.</h2>
                        <h2 class=" txHome2 br1">
                            We develop high performance decorative coatings, easy to apply and with exclusive finishes.
                        </h2>
                        <h2 class=" txHome2 br1">
                            We carefully select materials, textures and final results.</h2>

                        <h2 class="txHome2 br1">We offer proven, recognisable, quality products with great international
                            scope.</h2>
                        <h2 class="txHome2 ">
                            Our experience and innovation sets us apart from any microcement or coating on the market.
                        </h2>

                    </div>

                </div>
            </div>
        </div>
        <div class="section fullscreen background parallax" id="sttandardi">
            <div class="content-a" onClick="location.href= 'microcements/two-component-microcement-sttandard'"
                style="cursor:pointer;">
                <div class="contenedorTexto">
                    <div class="row">
                        <div class="col-md-12  text-center">
                            <img class="logoIni2"
                                src="https://www.topciment.com/imagenes/sistemas/Sttandard_Topciment_Logotipo_Blanco_200px.png"
                                alt="Microcemento bicomponente" title="Microcemento bicomponente">
                            <h2 class="enHome text-uppercase">The versatility of infinite creations</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section fullscreen background parallax" id="unlimittedi">
            <div class="content-a" onClick="location.href= 'microcements/two-component-microcement-unlimitted'"
                style="cursor:pointer;">


                <div class="contenedorTexto">
                    <div class="row">
                        <div class="col-md-12  text-center">
                            <img class="logoIni2"
                                src="https://www.topciment.com/imagenes/sistemas/logo_unlimitted_pagina_principal_200px.png"
                                alt="Microcemento monocomponente" title="Microcemento monocomponente">
                            <h2 class="enHome">AT THE VANGUARD OF TECHNIQUE</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section fullscreen background parallax" id="evoluttioni">
            <div class="content-a" onClick="location.href= 'microcements/one-component-microcement-evoluttion'"
                style="cursor:pointer;">


                <div class="contenedorTexto">
                    <div class="row">
                        <div class="col-md-12  text-center">
                            <img class="logoIni2"
                                src="https://www.topciment.com/imagenes/sistemas/Evoluttion_Topciment_Logotipo_Blanco_200px.png"
                                alt="Microcemento monocomponente" title="Microcemento monocomponente">
                            <h2 class="enHome text-uppercase">The simplicity of the authentic</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section fullscreen background parallax" id="atlanttici">
            <div class="content-a" onClick="location.href= 'microcements/microcement-for-pools-atlanttic'"
                style="cursor:pointer;">


                <div class="contenedorTexto">
                    <div class="row">
                        <div class="col-md-12  text-center">
                            <img class="logoIni2"
                                src="https://www.topciment.com/imagenes/sistemas/logo_atlanttic_pagina_principal_200px.png"
                                alt="Microcemento para piscinas" title="Microcemento para piscinas">
                            <h2 class="enHome">UNIQUE CREATIONS FOR UNDERWATER SPACES </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section fullscreen background parallax" id="efecttoi">
            <div class="content-a" onClick="location.href= 'microcements/ready-to-use-microcement-efectto'"
                style="cursor:pointer;">
                <div class="contenedorTexto">
                    <div class="row">
                        <div class="col-md-12  text-center">
                            <img class="logoIni2"
                                src="https://www.topciment.com/imagenes/sistemas/Efectto_Topciment_Logotipo_Blanco_200px.png"
                                alt="Microcemento listo al uso" title="Microcemento listo al uso">
                            <h2 class="enHome text-uppercase">The beauty and elegance of inimitable finishes</h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section fullscreen background parallax" id="pure-mettali">
            <div class="content-a" onClick="location.href= 'microcements/metallic-coating-pure-mettal'"
                style="cursor:pointer;">
                <div class="contenedorTexto">
                    <div class="row">
                        <div class="col-md-12  text-center">
                            <img class="logoIni2"
                                src="https://www.topciment.com/imagenes/sistemas/Pure_Mettal_Topciment_Logotipo_Blanco_200px.png"
                                alt="Microcemento metálico" title="Microcemento metálico">
                            <h2 class="enHome text-uppercase">The revolution in decorative coatings </h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section fullscreen background parallax" id="classic-mettali">
            <div class="content-a" onClick="location.href= 'microcements/metallic-paints-oxide-effect-classic-mettal'"
                style="cursor:pointer;">
                <div class="contenedorTexto">
                    <div class="row">
                        <div class="col-md-12  text-center">
                            <img class="logoIni2"
                                src="https://www.topciment.com/imagenes/sistemas/Classic_Mettal_Topciment_Logotipo_Blanco_200px.png"
                                alt="Pintura metálica natural y óxido" title="Pintura metálica natural y óxido">
                            <h2 class="enHome text-uppercase">The essence of natural with oxidised finishes</h2>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="section fullscreen background parallax" id="elittei">
            <div class="content-a" onClick="location.href= 'microcements/metallic-glazes-elitte'"
                style="cursor:pointer;">

                <div class="contenedorTexto">
                    <div class="row">
                        <div class="col-md-12  text-center">
                            <img class="logoIni2"
                                src="https://www.topciment.com/imagenes/sistemas/Elitte_Topciment_Logotipo_Blanco_200px.png"
                                alt="Efecto metálico y veladuras" title="Efecto metálico y veladuras">

                            <h2 class="enHome text-uppercase">Lights and shadows of metallic reflections</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section fullscreen background parallax" id="galeriai">
            <div class="content-a" onClick="location.href='microcements/gallery'" style="cursor:pointer;">
                <div class="contenedorTexto">
                    <div class="texotHome">
                        <div class=" txHome text-white">
                            <h2 class="enHome2"> FIND THE INSPIRATION</h2>
                            <p> It is said that a picture is worth a thousand words . In our gallery you
                                can
                                find much more than inspiration. Here we show you the works made by our best
                                professionals so that you can
                                get to know all the possibilities offered by microcement.</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>


        <div class="section fullscreen background parallax" id="profesionalesi">
            <div class="content-a" onClick="location.href='professionals'" style="cursor:pointer;">
                <div class="contenedorTexto">
                    <div class="texotHome">

                        <div class="txHome text-black mt-4 prof">
                            <h2 class="enHome2 "> SUPPORTING PROFESSIONALSS</h2>
                            <p>We share our experience with professionals through training and
                                permanent technical advice so that the results of the application of microcement are
                                optimal.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="section fullscreen background parallax" id="noticiasi">
            <div class="content-a" onClick="location.href='news'" style="cursor:pointer;">
                <div class="contenedorTexto">
                    <div class="texotHome">

                        <div class="txHome text-white">
                            <h2 class="enHome2 "> NEWS</h2>
                            <p>IWe are constantly researching, creating and designing new Topciment
                                products.
                                And, of course, we are immersed in the latest news and trends in microcement and
                                decorative coatings. We
                                tell you all about it in our news section.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section fullscreen background parallax" id="contactoi">
            <div class="content-a" onClick="location.href='contact'" style="cursor:pointer;">
                <div class="contenedorTexto">
                    <div class="texotHome">

                        <div class="txHome text-white">
                            <h2 class="enHome2">CONTACT US!</h2>
                            <p> If you need more information, do not hesitate to contact us.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>








        <div class="section fullscreen background parallax" id="footerFi">
            <div class="content-a" style="background-color: black;">
                <div class="contenedorTexto contenedorF contenedorFI" style="top:150px;background-color: black;">
                    <!-- START Footer -->
                    <footer class="footerp">
                        <div class="container contenedorF">
                            <div class="row row1">
                                <div class="col-md-3 col1F">
                                    <p class="tituloF productosF"><strong>MICROCEMENT</strong></p>
                                    <ul class="ulF productosF">
                                        <li class="sttandardF"><a class="linkB"
                                                href="microcements/two-component-microcement-sttandard">Two-component
                                                microcement</a></li>
                                        <li class="evoluttionF"><a class="linkB"
                                                href="microcements/one-component-microcement-evoluttion">One-component
                                                microcement</a></li>
                                        <li class="efecF"><a class="linkB"
                                                href="microcements/ready-to-use-microcement-efectto">Ready to use
                                                microcement</a></li>
                                        <li class="puremF"><a class="linkB"
                                                href="microcements/metallic-coating-pure-mettal">Metallic coating</a>
                                        </li>
                                        <li class="classicF"><a class="linkB"
                                                href="microcements/metallic-paints-oxide-effect-classic-mettal">Metallic
                                                paints</a></li>
                                        <li class="elitteF"><a class="linkB"
                                                href="microcements/metallic-glazes-elitte">Glazes and metallic
                                                pigments</a></li>
                                        <li class="primacemF"><a class="linkB"
                                                href="microcements/primers-and-adhesion-promoters-primacem">Primers</a>
                                        </li>
                                        <li class="arcocemF"><a class="linkB"
                                                href="microcements/pigments-for-microcement-arcocem">Pigments</a></li>
                                        <li class="topsealerF"><a class="linkB"
                                                href="microcements/polyurethane-waterbased-acrylic-varnishes-topsealer">Primers</a></li>
                                        <li class="limpieF"><a class="linkB"
                                                href="microcements/cleaning-and-care-of-microcement">Cleaning and care
                                                of
                                                microcement</a></li>
                                        <li class="herramF"><a class="linkB"
                                                href="microcements/microcement-tools">Tools</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col2F">
                                    <p class="tituloF proyectosF"><strong>PROJECTS</strong></p>
                                    <ul class="ulF projects">
                                        <li class=""><a class="linkB" href="microcements/gallery#paredes">Microcement in
                                                walls</a></li>
                                        <li class=""><a class="linkB" href="microcements/gallery#suelos">Microcement
                                                floors</a></li>
                                        <li class=""><a class="linkB" href="microcements/gallery#banyos">Microcement
                                                bathrooms</a></li>
                                        <li class=""><a class="linkB" href="microcements/gallery#cocinas">Microcement in
                                                kitchens</a></li>
                                        <li class=""><a class="linkB" href="microcements/gallery#escaleras">Microcement
                                                stairs</a></li>
                                        <li class=""><a class="linkB" href="microcements/gallery#piscinas">Microcement
                                                pools</a></li>
                                        <li class=""><a class="linkB" href="microcements/gallery#exterior">Microcement
                                                in exteriors</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col3F">
                                    <p class="tituloF"><strong>PROFESSIONALS</strong></p>
                                    <ul class="ulF profesionalesF">
                                        <li class="cursosF"><a class="linkB"
                                                href="microcements/microcement-application-courses">Microcement training
                                                courses</a></li>
                                        <li class="distriF"><a class="linkB" href="dealers">Distributors</a></li>
                                        <li class="garantF"><a class="linkB" href="guarantee">Guarantee</a></li>
                                        <li class="fichatF"><a class="linkB" href="data-sheet"">Data sheets</a>
                     </li>
                     <li class=" descargasF"><a class="linkB" href="projects">Projects</a></li>
                                        <li class="calcF"><a class="linkB" href="calc/">Calculator</a></li>
                                        <li class="selloF"><a class="linkB" href="quality-seal">Quality seal</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col4F">
                                    <p class="tituloF"><strong>COMPANY</strong></p>
                                    <ul class="ulF empresaF">
                                        <li class="nosotrosF"><a class="linkB"
                                                href="microcements/microcement-manufacturer">Microcement
                                                manufacturer</a></li>
                                        <li class="noticiasF"><a class="linkB" href="news">News</a></li>
                                        <li class="contactoF"><a class="linkB" href="contact">Contact</a></li>
                                        <li class="newsletterF"><a class="linkB" href="http://zc.vg/jPV0m">Subscribe to
                                                our newsletter</a>
                                        </li>
                                        <li class="atencionF">Topciment customer service Monday to Friday from 9:00 to
                                            18:00</li>
                                        <li class="numFooter">+34 963 92 59 89</li>
                                        <li class="emailF"> info@topciment.com</li>
                                    </ul>
                                    <p>
                                        <!-- Youtube -->
                                        <a rel="noopener" alt="Youtube Topciment" title="Youtube Topciment"
                                            class="linkB " href="https://www.youtube.com/user/TopCiment"
                                            target="_blank">
                                            <span class="fa-stack">
                                                <i class="fab fa-youtube fa-stack-2x"></i>

                                            </span></a>
                                        <!-- Instagrm -->
                                        <a rel="noopener" alt="Instagram Topciment" title="Instagram Topciment"
                                            class="linkB " href="https://www.instagram.com/topciment/" target="_blank">
                                            <span class="fa-stack">
                                                <i class="fab fa-instagram fa-stack-2x"></i>
                                            </span></a>
                                        <!--  Whatsap -->
                                        <a rel="noopener" alt="Whatsap Topciment" title="Whatsap Topciment"
                                            class="linkB "
                                            href="https://api.whatsapp.com/send?phone=34647913586&amp;text=Hola&amp;source=&amp;data="
                                            target="_blank"><span class="fa-stack">

                                                <i class="fab fa-whatsapp fa-stack-2x"></i>
                                            </span></a>
                                        <!--Pinterest -->
                                        <a rel="noopener" alt="Pinterest Topciment" title="Pinterest Topciment"
                                            class="linkB " href="https://www.pinterest.com/topciment/"
                                            target="_blank"><span class="fa-stack">

                                                <i class="fab fa-pinterest fa-stack-2x"></i>
                                            </span></a>
                                        <!--Facebook-->
                                        <a rel="noopener" alt="Facebook Topciment" title="Facebook Topciment"
                                            class="linkB " href="https://es-es.facebook.com/topciment.microcemento"
                                            target="_blank"><span class="fa-stack">

                                                <i class="fab fa-facebook fa-stack-2x"></i>
                                            </span></a>
                                        <!-- Twitter -->
                                        <a rel="noopener" alt="Twitter Topciment" title="Twitter Topciment"
                                            class="linkB " href="https://twitter.com/topciment" target="_blank"><span
                                                class="fa-stack">

                                                <i class="fab fa-twitter fa-stack-2x"></i>
                                            </span></a>
                                        <!-- Linkedin -->
                                        <a rel="noopener" alt="Linkedin Topciment" title="Linkedin Topciment"
                                            class="linkB " href="https://www.linkedin.com/company/2880536/"
                                            target="_blank"><span class="fa-stack">
                                                <i class="fab fa-linkedin fa-stack-2x"></i>
                                            </span></a>
                                    </p>
                                </div>
                            </div>
                            <div class="row row2">
                                <div class="col-md-1 col-12 col5F">
                                    <a href=""><img
                                            src="https://www.topciment.com/imagenes/logos/Topciment-cuadrado-blanco.png"
                                            class="img-fluid logoF" /></a>
                                </div>
                                <div class="col-md-11 col6F">
                                    <small class="direccionF"> © 2020 Grupo Negocios PO,S.L.U. Rosas 33, Manises 46940
                                        España</small><br class="brF">
                                    <small class="privaF">
                                        <a class="linkB politicaF" href="terms-conditions-and-privacy-statement"
                                            rel="nofollow">
                                            Terms, Conditions & Privacy Statement</a> |
                                        <a class="linkB cookieF" href="cookie-policy" rel="nofollow"
                                            class="textoBlanco">Cookie Policy</a></small>
                                </div>
                            </div>
                        </div>
                    </footer>


                </div>
            </div>
        </div>

    </div>



     <script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Organization",
  "name": "Topciment",
  "url": "https://www.topciment.com/es/",
  "logo": "https://www.topciment.com/imagenes/logos/logoBlanco2.png",
  "email": "info@topciment.com",
  "description": "We are leaders in the manufacture of microcement in Spain. Guarantee of up to 10 years on all our products",
  "telephone": "+34 963 925 989",
  "legalName":"Grupo Negocios PO SLU",
  "taxID":"B97539076",
  "hasOfferCatalog": "",
  "location": {
    "@type": "PostalAddress",
    "postalCode": "46940",
    "streetAddress": "Calle Rosas 33, Manises 46940, Valencia"
  },
  "slogan": "It's more than microcement, it's Topciment"
}
</script>


    <script defer src='../assets/js/script.js'></script>
</body>



</html>