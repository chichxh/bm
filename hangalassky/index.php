<?php

$database = 'bm';
$user = 'root';
$password = 'root';
$host = 'localhost';

$mysqli = new mysqli($host, $user, $password, $database);

$link = mysqli_connect($host, $user, $password, $database);

if ($link == false){
	print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}

$sql = 'SELECT * FROM hangalassky';
$result = mysqli_query($link, $sql);

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="css/leaflet.css">
    <link rel="stylesheet" href="css/qgis2web.css"><link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/leaflet-search.css">
    <link rel="stylesheet" href="css/leaflet-control-geocoder.Geocoder.css">
	<style type="text/css">
		body {
			font-family: 'Montserrat', Arial, sans-serif;
			background-color: #fff;
		}
		#map {
            width: 1219px;
            height: 852px;
		}
		a {
			color: #000;
			text-decoration: none;
			transition-duration: 0.3s;
		}
		a:hover {
			color: #c4c4c4;
		}
        .table tr:not(#map) {
            border: 1px solid #ced4da;
        }
        .table td:not(#map) {
            border: 1px solid #ced4da;
        }
	</style>
</head>
<body>
	<?php require 'header.php' ?>

	<div class="container-fluid mt-5">
		<h1 class="text-center mb-4">Хангаласский р.</h1>
		<div class="row">
			<div class="col-10 mx-auto">
		        <div id="map"></div>
        <script src="js/qgis2web_expressions.js"></script>
        <script src="js/leaflet.js"></script>
        <script src="js/leaflet.rotatedMarker.js"></script>
        <script src="js/leaflet.pattern.js"></script>
        <script src="js/leaflet-hash.js"></script>
        <script src="js/Autolinker.min.js"></script>
        <script src="js/rbush.min.js"></script>
        <script src="js/labelgun.min.js"></script>
        <script src="js/labels.js"></script>
        <script src="js/leaflet-control-geocoder.Geocoder.js"></script>
        <script src="js/leaflet-search.js"></script>
        <script src="data/_0.js"></script>
        <script src="data/_1.js"></script>
        <script src="data/_2.js"></script>
        <script src="data/_3.js"></script>
        <script src="data/_4.js"></script>
        <script>
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:1
        }).fitBounds([[60.295942391285045,124.84833570982785],[62.12450059517917,130.28630722462725]]);
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
        var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
        var bounds_group = new L.featureGroup([]);
        function setBounds() {
        }
        function pop__0(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['color'] !== null ? autolinker.link(feature.properties['color'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['name'] !== null ? autolinker.link(feature.properties['name'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['desc'] !== null ? autolinker.link(feature.properties['desc'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['oktmo'] !== null ? autolinker.link(feature.properties['oktmo'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['raion'] !== null ? autolinker.link(feature.properties['raion'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['population'] !== null ? autolinker.link(feature.properties['population'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['square'] !== null ? autolinker.link(feature.properties['square'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['url'] !== null ? autolinker.link(feature.properties['url'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style__0_0() {
            return {
                pane: 'pane__0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(114,155,111,1.0)',
                interactive: false,
            }
        }
        map.createPane('pane__0');
        map.getPane('pane__0').style.zIndex = 400;
        map.getPane('pane__0').style['mix-blend-mode'] = 'normal';
        var layer__0 = new L.geoJson(json__0, {
            attribution: '',
            interactive: false,
            dataVar: 'json__0',
            layerName: 'layer__0',
            pane: 'pane__0',
            onEachFeature: pop__0,
            style: style__0_0,
        });
        bounds_group.addLayer(layer__0);
        map.addLayer(layer__0);
        function pop__1(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['OSM_ID'] !== null ? autolinker.link(feature.properties['OSM_ID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['NAME'] !== null ? autolinker.link(feature.properties['NAME'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['NATURAL'] !== null ? autolinker.link(feature.properties['NATURAL'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WATERWAY'] !== null ? autolinker.link(feature.properties['WATERWAY'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WETLAND'] !== null ? autolinker.link(feature.properties['WETLAND'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style__1_0() {
            return {
                pane: 'pane__1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(60,103,182,1.0)',
                interactive: false,
            }
        }
        map.createPane('pane__1');
        map.getPane('pane__1').style.zIndex = 401;
        map.getPane('pane__1').style['mix-blend-mode'] = 'normal';
        var layer__1 = new L.geoJson(json__1, {
            attribution: '',
            interactive: false,
            dataVar: 'json__1',
            layerName: 'layer__1',
            pane: 'pane__1',
            onEachFeature: pop__1,
            style: style__1_0,
        });
        bounds_group.addLayer(layer__1);
        map.addLayer(layer__1);
        function pop__2(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['OSM_ID'] !== null ? autolinker.link(feature.properties['OSM_ID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['NAME'] !== null ? autolinker.link(feature.properties['NAME'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WATERWAY'] !== null ? autolinker.link(feature.properties['WATERWAY'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style__2_0() {
            return {
                pane: 'pane__2',
                opacity: 1,
                color: 'rgba(75,106,164,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 1.0,
                fillOpacity: 0,
                interactive: false,
            }
        }
        map.createPane('pane__2');
        map.getPane('pane__2').style.zIndex = 402;
        map.getPane('pane__2').style['mix-blend-mode'] = 'normal';
        var layer__2 = new L.geoJson(json__2, {
            attribution: '',
            interactive: false,
            dataVar: 'json__2',
            layerName: 'layer__2',
            pane: 'pane__2',
            onEachFeature: pop__2,
            style: style__2_0,
        });
        bounds_group.addLayer(layer__2);
        map.addLayer(layer__2);
        function pop__3(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['OSM_ID'] !== null ? autolinker.link(feature.properties['OSM_ID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['NAME'] !== null ? autolinker.link(feature.properties['NAME'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['REF'] !== null ? autolinker.link(feature.properties['REF'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['HIGHWAY'] !== null ? autolinker.link(feature.properties['HIGHWAY'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['ONEWAY'] !== null ? autolinker.link(feature.properties['ONEWAY'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['BRIDGE'] !== null ? autolinker.link(feature.properties['BRIDGE'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['TUNNEL'] !== null ? autolinker.link(feature.properties['TUNNEL'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['MAXSPEED'] !== null ? autolinker.link(feature.properties['MAXSPEED'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LANES'] !== null ? autolinker.link(feature.properties['LANES'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WIDTH'] !== null ? autolinker.link(feature.properties['WIDTH'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['SURFACE'] !== null ? autolinker.link(feature.properties['SURFACE'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style__3_0() {
            return {
                pane: 'pane__3',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 1.0,
                fillOpacity: 0,
                interactive: false,
            }
        }
        map.createPane('pane__3');
        map.getPane('pane__3').style.zIndex = 403;
        map.getPane('pane__3').style['mix-blend-mode'] = 'normal';
        var layer__3 = new L.geoJson(json__3, {
            attribution: '',
            interactive: false,
            dataVar: 'json__3',
            layerName: 'layer__3',
            pane: 'pane__3',
            onEachFeature: pop__3,
            style: style__3_0,
        });
        bounds_group.addLayer(layer__3);
        map.addLayer(layer__3);
        function pop__4(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Name'] !== null ? autolinker.link(feature.properties['Name'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Кол-во предприятий всего:</th>\
                        <td>' + (feature.properties['Кол-во предприятий всего:'] !== null ? autolinker.link(feature.properties['Кол-во предприятий всего:'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Кол-во ИП:</th>\
                        <td>' + (feature.properties['Кол-во ИП:'] !== null ? autolinker.link(feature.properties['Кол-во ИП:'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Кол-во Юр. Лиц:</th>\
                        <td>' + (feature.properties['Кол-во Юр. Лиц:'] !== null ? autolinker.link(feature.properties['Кол-во Юр. Лиц:'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Кол-во Микропредприятий:</th>\
                        <td>' + (feature.properties['Кол-во Микропредприятий:'] !== null ? autolinker.link(feature.properties['Кол-во Микропредприятий:'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Кол-во Мини предприятий:</th>\
                        <td>' + (feature.properties['Кол-во Мини предприятий:'] !== null ? autolinker.link(feature.properties['Кол-во Мини предприятий:'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Кол-во средних предприятий:</th>\
                        <td>' + (feature.properties['Кол-во средних предприятий:'] !== null ? autolinker.link(feature.properties['Кол-во средних предприятий:'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row"><p></p>Сельское Хозяйство</th>\
                        <td><p></p>' + (feature.properties['Сельское Хозяйство'] !== null ? autolinker.link(feature.properties['Сельское Хозяйство'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Розничная торговля</th>\
                        <td>' + (feature.properties['Розничная торговля'] !== null ? autolinker.link(feature.properties['Розничная торговля'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Оптовая торговля</th>\
                        <td>' + (feature.properties['Оптовая торговля'] !== null ? autolinker.link(feature.properties['Оптовая торговля'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Мясомолочное производство</th>\
                        <td>' + (feature.properties['Мясомолочное производство'] !== null ? autolinker.link(feature.properties['Мясомолочное производство'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Строительство и стройматериалы</th>\
                        <td>' + (feature.properties['Строительство и стройматериалы'] !== null ? autolinker.link(feature.properties['Строительство и стройматериалы'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Лесозаготовки</th>\
                        <td>' + (feature.properties['Лесозаготовки'] !== null ? autolinker.link(feature.properties['Лесозаготовки'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Добыча полезных ископаемы</th>\
                        <td>' + (feature.properties['Добыча полезных ископаемы'] !== null ? autolinker.link(feature.properties['Добыча полезных ископаемы'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Производство пищевой продукции</th>\
                        <td>' + (feature.properties['Производство пищевой продукции'] !== null ? autolinker.link(feature.properties['Производство пищевой продукции'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Производство непищевой продукции</th>\
                        <td>' + (feature.properties['Производство непищевой продукции'] !== null ? autolinker.link(feature.properties['Производство непищевой продукции'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Ремонт и Утилизация</th>\
                        <td>' + (feature.properties['Ремонт и Утилизация'] !== null ? autolinker.link(feature.properties['Ремонт и Утилизация'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Деятельность перевозчиков</th>\
                        <td>' + (feature.properties['Деятельность перевозчиков'] !== null ? autolinker.link(feature.properties['Деятельность перевозчиков'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Жилье</th>\
                        <td>' + (feature.properties['Жилье'] !== null ? autolinker.link(feature.properties['Жилье'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Общепит</th>\
                        <td>' + (feature.properties['Общепит'] !== null ? autolinker.link(feature.properties['Общепит'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">СМИ и Культура</th>\
                        <td>' + (feature.properties['СМИ и Культура'] !== null ? autolinker.link(feature.properties['СМИ и Культура'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">IT и Связь</th>\
                        <td>' + (feature.properties['IT и Связь'] !== null ? autolinker.link(feature.properties['IT и Связь'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Услуги узконаправленных специалистов</th>\
                        <td>' + (feature.properties['Услуги узконаправленных специалистов'] !== null ? autolinker.link(feature.properties['Услуги узконаправленных специалистов'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Туризм</th>\
                        <td>' + (feature.properties['Туризм'] !== null ? autolinker.link(feature.properties['Туризм'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Здравоохранение и образование</th>\
                        <td>' + (feature.properties['Здравоохранение и образование'] !== null ? autolinker.link(feature.properties['Здравоохранение и образование'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Бытовые услуги</th>\
                        <td>' + (feature.properties['Бытовые услуги'] !== null ? autolinker.link(feature.properties['Бытовые услуги'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Производство хлебобулочных изделий</th>\
                        <td>' + (feature.properties['Производство хлебобулочных изделий'] !== null ? autolinker.link(feature.properties['Производство хлебобулочных изделий'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                    <td><img href="img/diagramma.png" width="100%"></td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style__4_0() {
            return {
                pane: 'pane__4',
                radius: 4.800000000000001,
                opacity: 1,
                color: 'rgba(128,17,25,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 2.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(219,30,42,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane__4');
        map.getPane('pane__4').style.zIndex = 404;
        map.getPane('pane__4').style['mix-blend-mode'] = 'normal';
        var layer__4 = new L.geoJson(json__4, {
            attribution: '',
            interactive: true,
            dataVar: 'json__4',
            layerName: 'layer__4',
            pane: 'pane__4',
            onEachFeature: pop__4,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style__4_0(feature));
            },
        });
        bounds_group.addLayer(layer__4);
        map.addLayer(layer__4);
        var osmGeocoder = new L.Control.Geocoder({
            collapsed: true,
            position: 'topleft',
            text: 'Search',
            title: 'Testing'
        }).addTo(map);
        document.getElementsByClassName('leaflet-control-geocoder-icon')[0]
        .className += ' fa fa-search';
        document.getElementsByClassName('leaflet-control-geocoder-icon')[0]
        .title += 'Search for a place';
        var baseMaps = {};
        L.control.layers(baseMaps,{'<img src="legend/_4.png" /> Населенные пункты': layer__4,'<img src="legend/_3.png" /> Дороги': layer__3,'<img src="legend/_2.png" /> Водные объекты': layer__2,'<img src="legend/_1.png" /> Водные объекты': layer__1,'<img src="legend/_0.png" /> Хангаласский район': layer__0,},{collapsed:false}).addTo(map);
        setBounds();
        var i = 0;
        layer__4.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['Name'] !== null?String('<div style="color: #000000; font-size: 10pt; font-family: \'MS Shell Dlg 2\', sans-serif;">' + layer.feature.properties['Name']) + '</div>':''), {permanent: true, offset: [-0, -16], className: 'css__4'});
            labels.push(layer);
            totalMarkers += 1;
              layer.added = true;
              addLabel(layer, i);
              i++;
        });
        map.addControl(new L.Control.Search({
            layer: layer__4,
            initial: false,
            hideMarkerOnCollapse: true,
            propertyName: 'Name'}));
        document.getElementsByClassName('search-button')[0].className +=
         ' fa fa-binoculars';
        resetLabels([layer__4]);
        map.on("zoomend", function(){
            resetLabels([layer__4]);
        });
        map.on("layeradd", function(){
            resetLabels([layer__4]);
        });
        map.on("layerremove", function(){
            resetLabels([layer__4]);
        });
        </script>
			</div>
			<div class="col-1">
				<a href="hang2.php">---></a>
			</div>
		</div>

		<!-- <div class="row mt-5 text-center">
			<h1 class="mb-4">Основные виды деятельности</h1>
			<?php while ($row = mysqli_fetch_array($result)): ?>
				<p><?= $row['about']; ?></p> <br>
			<?php endwhile; ?>
		</div> -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <table class="table">
                        <tr>
                            <td>Населенные пункты</td>
                            <td>Сельское хозяйство</td>
                            <td>Розничная торговля</td>
                            <td>Оптовая торговля</td>
                            <td>Мясомолочное производство</td>
                            <td>Строительство и стройматериалы</td>
                            <td>Лесозаготовки</td>
                        </tr>
                        <tr>
                            <td>г. Покровск</td>
                            <td>6</td>
                            <td>69</td>
                            <td>3</td>
                            <td>1</td>
                            <td>18</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>c. Мохсоголлох</td>
                            <td>0</td>
                            <td>38</td>
                            <td>2</td>
                            <td>0</td>
                            <td>29</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>с. Бестях</td>
                            <td>0</td>
                            <td>9</td>
                            <td>0</td>
                            <td>0</td>
                            <td>5</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Населенные пункты</td>
                            <td>Добыча полезных ископаемых</td>
                            <td>Производство пищевой продукции</td>
                            <td>Производство непищевой продукции</td>
                            <td>Ремонт и Утилизация</td>
                            <td>Деятельность перевозчиков</td>
                            <td>Жилье</td>
                            <td>Общепит</td>
                        </tr>
                        <tr>
                            <td>г.Покровск</td>
                            <td>1</td>
                            <td>2</td>
                            <td>17</td>
                            <td>3</td>
                            <td>36</td>
                            <td>2</td>
                            <td>14</td>
                        </tr>
                        <tr>
                            <td>с.Мохсоголлох</td>
                            <td>0</td>
                            <td>1</td>
                            <td>10</td>
                            <td>2</td>
                            <td>32</td>
                            <td>0</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>с.Бестях</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>2</td>
                            <td>8</td>
                            <td>0</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Населенные пункты</td>
                            <td>СМИ и Культура</td>
                            <td>IT и Связь</td>
                            <td>Услуги узконаправленных специалистов</td>
                            <td>Туризм</td>
                            <td>Здравоохранение и образование</td>
                            <td>Бытовые услуги</td>
                            <td>Производство хлебобулочных изделий</td>
                        </tr>
                        <tr>
                            <td>г.Покровск</td>
                            <td>5</td>
                            <td>4</td>
                            <td>41</td>
                            <td>3</td>
                            <td>12</td>
                            <td>11</td>
                            <td>21</td>
                        </tr>
                        <tr>
                            <td>с.Мохсоголлох</td>
                            <td>0</td>
                            <td>4</td>
                            <td>12</td>
                            <td>1</td>
                            <td>3</td>
                            <td>8</td>
                            <td>32</td>
                        </tr>
                        <tr>
                            <td>с.Бестях</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>3</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
	</div>


	<?php require 'footer.php' ?>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>