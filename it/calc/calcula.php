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

    <title>Topciment Material Calculator</title> 
    <meta name="description" content="Topciment Material Calculator"/>

    <link rel="canonical" href="https://www.topciment.com/calcula"/>




    <?php include("../../assets/includes/scripts-head.php"); ?>
    <style>
        #myTable {
            border: 1px solid #d6d6d6;
        }

        thead {
            background: #DFE2E3;
        }

        th {
            border-bottom: 1px solid #d6d6d6;
        }

        tr:nth-child(even) {
            background: #f3f3f3;
        }
    </style>

<script>
		$(document).ready(function () {

			// ### DATA BASE ### ///
			// MICROS rendimiento según metros >> kg/m2
			var r_base_suelo_juntas = 3; // envases 20kg 3
			var r_base_pared_juntas = 2.5; // envases 20kg antes 3
			var r_base_suelo_liso = 2; // envases 20kg
			var r_base_pared_lisa = 2; // envases 20kg
			var r_base_suelo_stone = 1; // envases 20kg
			var r_base_suelo_stone_juntas = 1.5; // envases 20kg antes 2
			var r_fino = 0.5; // envases 10kg e 20kg
			var r_deck = 1; // envase 20kg
			var r_stone = 2; // envase 20kg
			var r_rustico = 2; // envase 20kg


			// RESINA  rendimiento según kilos di micro ltr/kg
			var r_resina_base = 0.30; // envases 5L e 25L
			var r_resina_fino = 0.45; // envases 5L e 25L
			var r_resina_deck = 0.35; // envases 5L e 25L
			var r_resina_stone = 0.27; // envases 5L e 25L
			var r_resina_rustico = 0.30; // envases 5L e 25L



			// PROMOTOR  rendimiento según metros
			var r_promotor = 0.10; // envase 5L
			var r_malla = 0.95; // envase 50m



			// Pigmentos, por mano / cantidad di manos pigmentadas en el sistema ¡¡¡POR ENVASE!!!
			var pigmento_suelo_juntas = 3; // 2 base 1 deck  - 1 base
			var pigmento_suelo_liso = 2; // 1 base 1 deck  - 1 base
			var pigmento_pared_juntas = 4; // 1 base 2 fino  - 2 base
			var pigmento_pared_lisa = 3; // 1 base 2 fino  - 1 base
			var pigmento_suelo_stone = 2; // 1 base 1 stone - 1 base



			// SELLADOR  rendimiento según metros
			var r_presealer = 0.12; // envase 5L
			var r_sellador = 0.15; // envase 6L




			// ### FIN DATA BASE ### ///


			var metros_suelo = localStorage.getItem('metros_suelo');
			var superficie_suelo = localStorage.getItem('superficie_suelo');
			var color_suelo = localStorage.getItem('color_suelo');

			var metros_pared = localStorage.getItem('metros_pared');
			var superficie_pared = localStorage.getItem('superficie_pared');
			var color_pared = localStorage.getItem('color_pared');

			var metros_antideslizante = localStorage.getItem('metros_antideslizante');
			var superficie_antideslizante = localStorage.getItem('superficie_antideslizante');
			var color_antideslizante = localStorage.getItem('color_antideslizante');

			var metros_rustico = localStorage.getItem('metros_rustico');
			var superficie_rustico = localStorage.getItem('superficie_rustico');
			var color_rustico = localStorage.getItem('color_rustico');


			// ### ES SUELO
			if (metros_suelo >= 1 && superficie_suelo != 'Escoge') {

				switch (superficie_suelo) {
					case 'Terrazo o Marmol':
						var promotor_suelo = 'Primacem Plus';
						var kilos_base_suelo = Math.ceil(metros_suelo * r_base_suelo_liso);
						var litros_promotor_suelo = (metros_suelo * r_promotor / 2.5) / 2;
						break;
					case 'Gres, azulejo o porcelánico (con juntas)':
						var promotor_suelo = 'Primacem Plus';
						var kilos_base_suelo = Math.ceil(metros_suelo *
							2.5); //Before:  	var kilos_base_suelo = Math.ceil(metros_suelo * r_base_suelo_juntas);

						var litros_promotor_suelo = Math.ceil(metros_suelo * r_promotor / 2.5);

						break;
					case 'Solera':
						var promotor_suelo = 'Acricem';
						var kilos_base_suelo = Math.ceil(metros_suelo * r_base_suelo_liso);
						var litros_promotor_suelo = Math.ceil((metros_suelo * r_promotor / 2.5) / 2);

						break;
					case 'Autonivelante':
						var promotor_suelo = 'Acricem';
						var kilos_base_suelo = Math.ceil(metros_suelo * r_base_suelo_liso);
						var litros_promotor_suelo = Math.ceil((metros_suelo * r_promotor / 2.5) / 2);
						break;
				}


				var kilos_micro_suelo = Math.ceil(metros_suelo * r_deck);
				var unidades_base_suelo = Math.ceil(kilos_base_suelo / 20); //TODO
				var unidades_micro_suelo = Math.ceil(kilos_micro_suelo / 20);
				var litros_resina_base_suelo = Math.ceil(kilos_base_suelo * r_resina_base);
				var litros_resina_micro_suelo = Math.ceil(kilos_micro_suelo * r_resina_deck);
				var litros_resina_total_suelo = Math.ceil(litros_resina_base_suelo + litros_resina_micro_suelo);
				var unidades_malla_suelo = Math.ceil(metros_suelo / 50);
				var unidades_pigmento_suelo = Math.ceil(metros_suelo / 20) + unidades_micro_suelo;
				var litros_presealer_suelo = Math.ceil(metros_suelo * r_presealer / 5);
				var litros_sellador_suelo = Math.ceil(metros_suelo * r_sellador / 6);

				/*  Math.ceil(litros_promotor_suelo / 2) + ' unità di 5 lt */
				var suelo = '<strong>Tipo di supporto</strong>: ' + superficie_suelo + ' | <strong>metri</strong>: ' +
					metros_suelo + ' | <strong>Colore</strong>: ' + color_suelo;
				var _suelo = '<tr><td>Primer  <strong>' + promotor_suelo + '</td><td>' +
					litros_promotor_suelo + ' unità di 5 litri.</td></tr>' +
					'<tr><td>Rete <strong>Builtex</strong>  ' + metros_suelo + ' metri</td><td>' +
					unidades_malla_suelo + ' di 50 m2</td></tr>' +
					'<tr><td><strong>Microbase</strong> Microcement </td><td> ' + unidades_base_suelo +
					' secchio di 20kg. (' + kilos_base_suelo + ' kg. Microbase)</td></tr>' +
					'<tr><td> <strong>Microdeck</strong> Microcement</td><td> ' + unidades_micro_suelo +
					' secchio di 20kg.(' + kilos_micro_suelo + ' kg. Microdeck)</td></tr>' +
					'<tr><td> Resina <strong>Acricem</strong> </td><td> ' + Math.ceil(litros_resina_total_suelo / 5) +
					' unità di 5 litri. ó ' + Math.ceil(litros_resina_total_suelo / 25) + ' unità di 25 litri. (' +
					Math.ceil(litros_resina_base_suelo) + ' litri per Microbase e ' + Math.ceil(
						litros_resina_micro_suelo) + ' litri per Microdeck )</td></tr>' +
					'<tr><td><strong>Pigment dose</strong> ' + unidades_pigmento_suelo + '</td><td> ' + Math
					.ceil(metros_suelo / 20) + ' per Microbase e ' + unidades_micro_suelo +
					' per Microdeck . Colore' + color_suelo + '</td></tr>' +
					'<tr><td> Primer <strong>Presealer</strong> </td><td> ' + litros_presealer_suelo +
					'  unità di 5 litri.</td></tr>' +
					'<tr><td> <strong>Topsealer WT</strong> Sealer</td><td> ' + litros_sellador_suelo +
					' unità di 5 + 1 litri.</td></tr>';

				$('#suelo').html(suelo);
				$('#_suelo').html(_suelo);

			}   
			// ### ES PARED
			if (metros_pared >= 1 && superficie_pared != 'Escoge') {
				switch (superficie_pared) {
					case 'Azulejo':
						var promotor_pared = 'Primacem Plus';
						var kilos_base_pared = Math.ceil(metros_pared * r_base_pared_juntas);
						var litros_promotor_pared = Math.ceil((metros_pared * r_promotor / 5) * 2);

						break;
					case 'Pladur':
						var promotor_pared = 'Primacem ABS';
						var kilos_base_pared = Math.ceil(metros_pared * r_base_pared_lisa);
						var litros_promotor_pared = Math.ceil(metros_pared * r_promotor / 5);

						break;
					case 'Enfoscado':
						var promotor_pared = 'Acricem';
						var kilos_base_pared = Math.ceil(metros_pared * r_base_pared_lisa);
						var litros_promotor_pared = Math.ceil(metros_pared * r_promotor / 5);

						break;
				}

				var kilos_micro_pared = Math.ceil(metros_pared * r_fino);
				var unidades_base_pared = Math.ceil(kilos_base_pared / 20);
				var unidades_micro_pared = Math.ceil(kilos_micro_pared / 20);
				var litros_resina_base_pared = (kilos_base_pared * r_resina_base);
				var litros_resina_micro_pared = (kilos_micro_pared * r_resina_fino);
				var litros_resina_total_pared = Math.ceil(litros_resina_base_pared + litros_resina_micro_pared);
				var unidades_malla_pared = Math.ceil(metros_pared / 50);
				var unidades_pigmento_pared = Math.ceil(metros_pared / 20) + unidades_micro_pared;
				var litros_presealer_pared = Math.ceil(metros_pared * r_presealer);
				var litros_sellador_pared = Math.ceil(metros_pared * r_sellador / 6);

				console.log((metros_pared * r_promotor / 5) * 2);

				var pared = '<strong>Tipo di supporto</strong>: ' + superficie_pared + ' | <strong>metri</strong>: ' +
					metros_pared + ' | <strong>Colore</strong>: ' + color_pared;

				var _pared = '<tr><td>Primer  <strong>' + promotor_pared + '</strong></td><td> ' +
					litros_promotor_pared + ' unità di 5 litri.</td></tr>' +
					'<tr><td>Rete <strong>Builtex</strong> ' + metros_pared + ' metri</td><td>' +
					unidades_malla_pared + ' di 50 m2</td></tr>' +
					'<tr><td> <strong>Microbase</strong> Microcement</td><td> ' + unidades_base_pared +
					' secchio di 20kg.(' + kilos_base_pared + ' kg. Microbase)</td></tr>' +
					'<tr><td> <strong>Microfino</strong> Microcement</td><td> ' + unidades_micro_pared +
					' secchio di 20kg.(' + kilos_micro_pared + ' kg. Microfino)</td></tr>' +
					'<tr><td> Resina <strong>Acricem</strong> </td><td> ' + Math.round(litros_resina_total_pared / 5) +
					' unità di 5 litri. ó ' + Math.ceil(litros_resina_total_pared / 25) + ' unità di 25 litri. (' +
					Math.round(litros_resina_base_pared) + ' litri per Microbase e ' + Math.round(
						litros_resina_micro_pared) + ' litri per Microfino )</td></tr>' +
					'<tr><td><strong>Pigment dose</strong> ' + unidades_pigmento_pared + '</td><td> ' + Math
					.ceil(metros_pared / 20) + ' per Microbase e ' + unidades_micro_pared +
					' per Microfino . Colore' + color_pared + '</td></tr>' +
					'<tr><td> Primer <strong>Presealer</strong> </td><td> ' + Math.ceil(litros_presealer_pared /
						5) + '  unità di 5 litri.</td></tr>' +
					'<tr><td> <strong>Topsealer WT</strong> Sealer</td><td>' + litros_sellador_pared +
					' unità di 5 + 1 litri.</td></tr>';
				$('#pared').html(pared);
				$('#_pared').html(_pared);
			}



			// ES ANTIDESLIZANTE
			if (metros_antideslizante >= 1 && superficie_antideslizante != 'Escoge') {

				switch (superficie_antideslizante) {
					case 'Solera':
						var promotor_antideslizante = 'Acricem';
						var kilos_base_antideslizante = Math.ceil(metros_antideslizante * r_base_suelo_stone);
						break;
					case 'Ceramic flooring (with joints)':
						var promotor_antideslizante = 'Primacem Plus';
						var kilos_base_antideslizante = Math.ceil(metros_antideslizante * r_base_suelo_stone_juntas);
						console.log("con juntas" + kilos_base_antideslizante);
						break;
				}


				var litros_promotor_antideslizante = Math.ceil(metros_antideslizante * r_promotor / 5);
				/* var kilos_base_antideslizante = Math.ceil(metros_antideslizante * r_base_suelo_stone); */
				var kilos_micro_antideslizante = Math.ceil(metros_antideslizante * r_stone);
				var unidades_base_antideslizante = Math.ceil(kilos_base_antideslizante / 20);
				var unidades_micro_antideslizante = Math.ceil(kilos_micro_antideslizante / 20);
				var litros_resina_base_antideslizante = (kilos_base_antideslizante * r_resina_base);
				var litros_resina_micro_antideslizante = Math.ceil(kilos_micro_antideslizante * r_resina_stone);
				var litros_resina_total_antideslizante = Math.ceil(litros_resina_base_antideslizante +
					litros_resina_micro_antideslizante);
				var unidades_malla_antideslizante = Math.ceil(metros_antideslizante / 50);
				var unidades_pigmento_antideslizante = Math.ceil(metros_antideslizante / 20) +
					unidades_micro_antideslizante;
				var litros_presealer_antideslizante = Math.ceil(metros_antideslizante * r_presealer);
				var litros_sellador_antideslizante = Math.ceil(metros_antideslizante * r_sellador / 6);

				var antideslizante = '<strong>Tipo di supporto</strong>: ' + superficie_antideslizante +
					' | <strong>metri</strong>: ' + metros_antideslizante + ' | <strong>Colore</strong>: ' +
					color_antideslizante;

				var _antideslizante = '<tr><td>Primer  <strong>' + promotor_antideslizante + '</strong></td><td> ' +
					Math.ceil(litros_promotor_antideslizante) + ' unità di 5 litri.</td></tr>' +
					'<tr><td>Rete <strong>Builtex</strong> ' + metros_antideslizante + ' metri</td><td>' +
					unidades_malla_antideslizante + ' di 50 m2</td></tr>' +
					'<tr><td> <strong>Microbase</strong> Microcement</td><td> ' + unidades_base_antideslizante +
					' secchio di 20kg.(' + kilos_base_antideslizante + 'kg. Microbase per aplicación) </td></tr>' +
					'<tr><td><strong>Microstone</strong> Microcement </td><td> ' + unidades_micro_antideslizante +
					' secchio di 20kg.(' + kilos_micro_antideslizante + ' kg. Microstone)</td></tr>' +
					'<tr><td> Resina <strong>Acricem</strong> </td><td> ' + Math.ceil(
						litros_resina_total_antideslizante / 5) + ' unità di 5 litri. ó ' + Math.ceil(
						litros_resina_total_antideslizante / 25) + ' unità di 25 litri. (' + Math.round(
						litros_resina_base_antideslizante) + ' litri per Microbase e ' + Math.round(
						litros_resina_micro_antideslizante) + ' litri per Microstone )</td></tr>' +
					'<tr><td><strong>Pigment dose</strong> </td><td> ' + unidades_micro_antideslizante +
					' dosis per Microstone . Colore' + color_antideslizante + '</td></tr>' +
					'<tr><td> Primer <strong>Presealer</strong> </td><td> ' + Math.ceil(
						litros_presealer_antideslizante / 5) + '  unità di 5 litri.</td></tr>' +
					'<tr><td> <strong>Topsealer WT</strong> Sealer</td><td>' + litros_sellador_antideslizante +
					' unità di 5 + 1 litri.</td></tr>';


				$('#antideslizante').html(antideslizante);
				$('#_antideslizante').html(_antideslizante);
			}

		});
	</script>
</head>

<body id="productos">

    <?php include("../includes/header.php"); ?>


    <?php include("../includes/menu-movil.php"); ?>
   
  	<div data-role="page" data-theme="a">

		<p></br></p>
		<div data-role="header" data-position="inline">
			<p></br></p>
			<h1>Material calculator</h1>
			<div data-role="navbar">
				<ul>
					<li><a href="#" data-icon="arrow-l" data-rel="back" class="mt-4">Back</a></li>
				</ul>
			</div>
		</div>

		<div data-role="main" class="ui-content">

			<h2>It has been indicated per floor</h2>
			<p id="suelo"></p>
			<table data-role="table" data-mode="" class="ui-responsive ui-shadow" id="myTable">
				<thead>
					<tr>
						<th>Prodotto necessario</th>
						<th>Unità necessarie</th>
					</tr>
				</thead>
				<tbody id="_suelo">
					<tr>
						<td>Non è stato indicato pavimento</td>
						<td></td>
					</tr>
				</tbody>
			</table> <br />
			<hr />

			<h2>È stato indicato per parete</h2>
			<p id="pared"></p>
			<table data-role="table" data-mode="" class="ui-responsive ui-shadow" id="myTable">
				<thead>
					<tr>
						<th>Prodotto necessario</th>
						<th>Unità necessarie</th>
					</tr>
				</thead>
				<tbody id="_pared">
					<tr>
						<td>Non è stato indicato parete</td>
						<td></td>
					</tr>
				</tbody>
			</table> <br />
			<hr />


			<h2>È stato indicato per parete</h2>
			<p id="antideslizante"></p>
			<table data-role="table" data-mode="" class="ui-responsive ui-shadow" id="myTable">
				<thead>
					<tr>
						<th>Prodotto necessario</th>
						<th>Unità necessarie</th>
					</tr>
				</thead>
				<tbody id="_antideslizante">
					<tr>
						<td>No non-slip floor indicated</td>
						<td></td>
					</tr>
				</tbody>
			</table> <br />
			<hr />
		<br />
			<hr />
			</table>
		</div>

	

	</div>
    <div id="separador50px">
    </div>


    <?php include("../../assets/includes/scripts.php"); ?>
    </div>

    <!-- include jQuery -->

</body>

</html>