<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#000"/>
    <meta name="viewport" content="width=device-width"/>
    <!--[if lt IE 9]> <script src="js/css3-mediaqueries.js"></script> <![endif]-->
    <link rel="icon" type="image/png" href="https://www.topciment.com/favicon.png"/>
    <meta name="Language" content="ES"/>


    <?php include("../../assets/includes/styles.php"); ?>
    <link rel="stylesheet" href="themes/Bootstrap.css">
    <link rel="stylesheet" href="themes/jquery.mobile.structure-1.4.0.min.css"/>
    <link rel="stylesheet" href="themes/jquery.mobile.icons.min.css"/>
    <script src="themes/jquery-1.8.2.min.js"></script>
    <script src="themes/jquery.mobile-1.4.0.min.js"></script>

    <title>Calculadora precio microcemento, barnices, imprimación y colores</title>
    <meta name="description" content="¿Quieres aplicar microcemento y no sabes cuánto material necesitas? Con nuestra calculadora sabrás la cantidad según la superficie a revestir, los m2 y el color de microcemento."/>

    <link rel="canonical" href="https://www.topciment.com/es/calc/"/>




    <?php include("../../assets/includes/scripts-head.php"); ?>
    <script>
        $(document).ready(function() {

            $('#botonguardar').click(function() {
                localStorage.setItem('metros_suelo', $('#metros_suelo').val());
                localStorage.setItem('superficie_suelo', $('#superficie_suelo').val());
                localStorage.setItem('color_suelo', $('#color_suelo').val());

                localStorage.setItem('metros_pared', $('#metros_pared').val());
                localStorage.setItem('superficie_pared', $('#superficie_pared').val());
                localStorage.setItem('color_pared', $('#color_pared').val());

                localStorage.setItem('metros_antideslizante', $('#metros_antideslizante').val());
                localStorage.setItem('superficie_antideslizante', $('#superficie_antideslizante').val());
                localStorage.setItem('color_antideslizante', $('#color_antideslizante').val());

                localStorage.setItem('metros_rustico', $('#metros_rustico').val());
                localStorage.setItem('superficie_rustico', $('#superficie_rustico').val());
                localStorage.setItem('color_rustico', $('#color_rustico').val());

                location.assign("calcula");
            });

            $('#borrar').click(function() {
                window.location.reload(true);
            });

        });
    </script>
</head>

<body id="productos">

    <?php include("../includes/header.php"); ?>


    <?php include("../includes/menu-movil.php"); ?>

    <div data-role="content" data-theme="a" class="text-center">
        <div id="separador50px"></div>
        <div id="separador50px"></div>
        <div class="text-center mt-4 mb-5" data-animate-scroll='{"x": "0", "y": "-200", "alpha": "0", "duration": "2"}'>
            <h1 style="font-size: 65px;font-weight: 300;">Calculadora de material</h2>
                <h2 style="font-size: 45px;font-weight: 300;">¿Qué necesita?</h3>
                    <h3 style="font-size: 25px;font-weight: 300;">Para calcular la cantidad de material necesario,
                        es
                        importante especificar los m2, el soporte y el
                        color.</h4>
        </div>


        <!--<form action="#" method="get">-->
        <div style="padding:.4em 1em; border:1px solid #ccc;">
            <h3>Suelos</h3>
            <div data-role="fieldcontain">
                <label for="superficie_suelo" class="superficie_suelo">¿Qué superficie?</label>
                <select name="superficie_suelo" id="superficie_suelo" data-native-menu="false">
                    <option value="Escoge">Escoja superficie de suelo</option>
                    <option value="Terrazo o Marmol">Terrazo o mármol</option>
                    <option value="Gres, azulejo o porcelánico (con juntas)">Gres, azulejo o porcelánico (con
                        juntas)</option>
                    <option value="Solera">Solera de hormigón</option>
                    <option value="Autonivelante">Autonivelante</option>
                </select>
            </div>
            <div data-role="fieldcontain">
                <label for="metros_suelo">¿Cuantos metros?</label>
                <input type="range" name="metros_suelo" id="metros_suelo" value="0" min="0" max="100000" data-highlight="true"/>
            </div>
            <div data-role="fieldcontain">
                <label for="color_suelo" class="select">¿Qué color?</label>
                <select name="color_suelo" id="color_suelo" data-native-menu="false">
                    <option>Seleccione</option>
                    <option value="A definir">A definir</option>
                    <option value="Acero">Acero</option>
                    <option value="Arena">Arena</option>
                    <option value="Atacama">Atacama</option>
                    <option value="Avellana">Avellana</option>
                    <option value="Azafran">Azafran</option>
                    <option value="Azul Noche">Azul Noche</option>
                    <option value="Azul Profundo">Azul Profundo</option>
                    <option value="Blanco">Blanco</option>
                    <option value="Café">Café</option>
                    <option value="Calabaza">Calabaza</option>
                    <option value="Carmin">Carmin</option>
                    <option value="Cemento">Cemento</option>
                    <option value="Cobre">Cobre</option>
                    <option value="Desert tan">Desert tan</option>
                    <option value="French Gray">French Gray</option>
                    <option value="Himalaya">Himalaya</option>
                    <option value="Jade">Jade</option>
                    <option value="Kalahari">Kalahari</option>
                    <option value="Kiwi">Kiwi</option>
                    <option value="Liquen">Liquen</option>
                    <option value="Maiz">Maiz</option>
                    <option value="Manzana">Manzana</option>
                    <option value="Marfil">Marfil</option>
                    <option value="Marron">Marron</option>
                    <option value="Más de un color">Más de un color</option>
                    <option value="Maya">Maya</option>
                    <option value="Mojave">Mojave</option>
                    <option value="Negro">Negro</option>
                    <option value="Niquel">Niquel</option>
                    <option value="Perla">Perla</option>
                    <option value="Piedra Paris">Piedra Paris</option>
                    <option value="Pizarra">Pizarra</option>
                    <option value="Plata">Plata</option>
                    <option value="Plomo">Plomo</option>
                    <option value="Sahara">Sahara</option>
                    <option value="Selva">Selva</option>
                    <option value="Shale Gray">Shale Gray</option>
                    <option value="Titanio">Titanio</option>
                    <option value="Topo">Topo</option>
                    <option value="Wengue">Wengue</option>

                </select>
            </div>
        </div>
        &nbsp; &nbsp;
        <div style="padding:.4em 1em; border:1px solid #ccc;">
            <h3>Pared</h3>
            <div data-role="fieldcontain">
                <label for="superficie_pared" class="select">¿Qué superficie?</label>
                <select name="superficie_pared" id="superficie_pared" data-native-menu="false">
                    <option value="Escoge">Escoja superficie de pared</option>
                    <option value="Azulejo">Azulejo</option>
                    <option value="Pladur">Pladur</option>
                    <option value="Enfoscado">Enfoscado</option>
                </select>
            </div>
            <div data-role="fieldcontain">
                <label for="metros_pared">¿Cuantos Metros?</label>
                <input type="range" name="metros_pared" id="metros_pared" value="0" min="0" max="100000" data-highlight="true"/>
            </div>
            <div data-role="fieldcontain">
                <label for="color_pared" class="select">¿Qué color?</label>
                <select name="color_pared" id="color_pared" data-native-menu="false">
                    <option>Seleccione</option>
                    <option value="A definir">A definir</option>
                    <option value="Acero">Acero</option>
                    <option value="Arena">Arena</option>
                    <option value="Atacama">Atacama</option>
                    <option value="Avellana">Avellana</option>
                    <option value="Azafran">Azafran</option>
                    <option value="Azul Noche">Azul Noche</option>
                    <option value="Azul Profundo">Azul Profundo</option>
                    <option value="Blanco">Blanco</option>
                    <option value="Café">Café</option>
                    <option value="Calabaza">Calabaza</option>
                    <option value="Carmin">Carmin</option>
                    <option value="Cemento">Cemento</option>
                    <option value="Cobre">Cobre</option>
                    <option value="Desert tan">Desert tan</option>
                    <option value="French Gray">French Gray</option>
                    <option value="Himalaya">Himalaya</option>
                    <option value="Jade">Jade</option>
                    <option value="Kalahari">Kalahari</option>
                    <option value="Kiwi">Kiwi</option>
                    <option value="Liquen">Liquen</option>
                    <option value="Maiz">Maiz</option>
                    <option value="Manzana">Manzana</option>
                    <option value="Marfil">Marfil</option>
                    <option value="Marron">Marron</option>
                    <option value="Más de un color">Más de un color</option>
                    <option value="Maya">Maya</option>
                    <option value="Mojave">Mojave</option>
                    <option value="Negro">Negro</option>
                    <option value="Niquel">Niquel</option>
                    <option value="Perla">Perla</option>
                    <option value="Piedra Paris">Piedra Paris</option>
                    <option value="Pizarra">Pizarra</option>
                    <option value="Plata">Plata</option>
                    <option value="Plomo">Plomo</option>
                    <option value="Sahara">Sahara</option>
                    <option value="Selva">Selva</option>
                    <option value="Shale Gray">Shale Gray</option>
                    <option value="Titanio">Titanio</option>
                    <option value="Topo">Topo</option>
                    <option value="Wengue">Wengue</option>
                </select>
            </div>
        </div>
        &nbsp; &nbsp;
        <div style="padding:.4em 1em; border:1px solid #ccc;">
            <h3>Exteriores</h3>
            <div data-role="fieldcontain">
                <label for="superficie_antideslizante" class="select">¿Qué superficie?</label>
                <select name="superficie_antideslizante" id="superficie_antideslizante" data-native-menu="false">
                    <option value="Escoge">Escoja superficie exterior</option>
                    <option value="Solera">Solera de hormigón</option>
                    <option value="Pavimento cerámico (con juntas)">Pavimento cerámico (con juntas)</option>
                </select>
            </div>
            <div data-role="fieldcontain">
                <label for="metros_antideslizante">¿Cuantos Metros?</label>
                <input type="range" name="metros_antideslizante" id="metros_antideslizante" value="0" min="0" max="100000" data-highlight="true"/>
            </div>
            <div data-role="fieldcontain">
                <label for="color_antideslizante" class="select">¿Qué color?</label>
                <select name="color_antideslizante" id="color_antideslizante" data-native-menu="false">
                    <option>Seleccione</option>
                    <option value="A definir">A definir</option>
                    <option value="Acero">Acero</option>
                    <option value="Arena">Arena</option>
                    <option value="Atacama">Atacama</option>
                    <option value="Avellana">Avellana</option>
                    <option value="Azafran">Azafran</option>
                    <option value="Azul Noche">Azul Noche</option>
                    <option value="Azul Profundo">Azul Profundo</option>
                    <option value="Blanco">Blanco</option>
                    <option value="Café">Café</option>
                    <option value="Calabaza">Calabaza</option>
                    <option value="Carmin">Carmin</option>
                    <option value="Cemento">Cemento</option>
                    <option value="Cobre">Cobre</option>
                    <option value="Desert tan">Desert tan</option>
                    <option value="French Gray">French Gray</option>
                    <option value="Himalaya">Himalaya</option>
                    <option value="Jade">Jade</option>
                    <option value="Kalahari">Kalahari</option>
                    <option value="Kiwi">Kiwi</option>
                    <option value="Liquen">Liquen</option>
                    <option value="Maiz">Maiz</option>
                    <option value="Manzana">Manzana</option>
                    <option value="Marfil">Marfil</option>
                    <option value="Marron">Marron</option>
                    <option value="Más de un color">Más de un color</option>
                    <option value="Maya">Maya</option>
                    <option value="Mojave">Mojave</option>
                    <option value="Negro">Negro</option>
                    <option value="Niquel">Niquel</option>
                    <option value="Perla">Perla</option>
                    <option value="Piedra Paris">Piedra Paris</option>
                    <option value="Pizarra">Pizarra</option>
                    <option value="Plata">Plata</option>
                    <option value="Plomo">Plomo</option>
                    <option value="Sahara">Sahara</option>
                    <option value="Selva">Selva</option>
                    <option value="Shale Gray">Shale Gray</option>
                    <option value="Titanio">Titanio</option>
                    <option value="Topo">Topo</option>
                    <option value="Wengue">Wengue</option>
                </select>
            </div>
        </div>
        &nbsp; &nbsp;

        <!--div style="padding:.4em 1em; border:1px solid #ccc;" >
					<h3>Acabado rústico</h3>
					<div data-role="fieldcontain">
						<label for="superficie_rustico" class="select">¿Qué superficie?</label>
						<select name="superficie_rustico" id="superficie_rustico" data-native-menu="false">
							<option value="Escoge">Escoja superficie rustico</option>
							<option value="Solera">Solera de hormigón</option>
                            <option value="Pavimento cerámico (con juntas)">Pavimento cerámico (con juntas)</option>
						</select>
					</div>
					<div data-role="fieldcontain">
						<label for="metros_rustico">¿Cuantos Metros?</label>
					 	<input type="range" name="metros_rustico" id="metros_rustico" value="0" min="0" max="100000" data-highlight="true"  />
					</div>
					<div data-role="fieldcontain">
						<label for="color_rustico" class="select">¿Qué color?</label>
						<select name="color_rustico" id="color_rustico" data-native-menu="false">
							<option>Seleccione</option>
							<option value="A definir">A definir</option>
							<option value="Más de un color">Más de un color</option>
                            <option value="Negro">Negro</option>
                            <option value="Shale Gray">Shale Gray</option>
                            <option value="Plomo">Plomo</option>
                            <option value="Marron">Marron</option>
                            <option value="Wengue">Wengue</option>
                            <option value="Pizarra">Pizarra</option>
                            <option value="Himalaya">Himalaya</option>
                            <option value="Cemento">Cemento</option>
                            <option value="Café">Café</option>
                            <option value="Topo">Topo</option>
                            <option value="Acero">Acero</option>
                            <option value="Titanio">Titanio</option>
                            <option value="French Gray">French Gray</option>
                            <option value="Piedra Paris">Piedra Paris</option>
                            <option value="Cobre">Cobre</option>
                            <option value="Plata">Plata</option>
                            <option value="Perla">Perla</option>
                            <option value="Liquen">Liquen</option>
                            <option value="Sahara">Sahara</option>
                            <option value="Avellana">Avellana</option>
                            <option value="Niquel">Niquel</option>
                            <option value="Blanco">Blanco</option>
                            <option value="Marfil">Marfil</option>
                            <option value="Kalahari">Kalahari</option>
                            <option value="Desert tan">Desert tan</option>
                            <option value="Atacama">Atacama</option>
                            <option value="Arena">Arena</option>
                            <option value="Mojave">Mojave</option>
                            <option value="Maiz">Maiz</option>
                            <option value="Selva">Selva</option>
                            <option value="Kiwi">Kiwi</option>
                            <option value="Manzana">Manzana</option>
                            <option value="Azafran">Azafran</option>
                            <option value="Calabaza">Calabaza</option>
                            <option value="Azul Noche">Azul Noche</option>
                            <option value="Azul Profundo">Azul Profundo</option>
                            <option value="Maya">Maya</option>
                            <option value="Jade">Jade</option>
                            <option value="Carmin">Carmin</option>
						</select>
					</div-->
    </div>
    <div class="ui-body ui-body-b">
        <fieldset class="ui-grid-a">
            <div class="ui-block-f">
                <button id="botonguardar" data-theme="f">Calcular</button>
            </div>
        </fieldset>
        <fieldset class="ui-grid-a">
            <div class="ui-block-f">
                <button id="borrar" data-theme="a">borrar</button>
            </div>
        </fieldset>
    </div>

    <?php include "../includes/footer.php"; ?>

    <?php include("../../assets/includes/scripts.php"); ?>
    </div>

    <!-- include jQuery -->

</body>

</html>