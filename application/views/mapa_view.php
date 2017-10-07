<!DOCTYPE html>
<html>

<head>
    <title>Mapa Interactivo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url()?>rsc/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>rsc/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=base_url()?>rsc/css/ionicons.css">
	<link rel="stylesheet" href="<?=base_url()?>rsc/css/AdminLTE.min.css">
    <link rel="stylesheet" href="css/waves.css">
    <!-- Mapa Aqui -->
    <script hrfer ="<?=base_url()?>rcs/ammap/ammap.js" type="text/javascript"></script>
    <script  hrfer ="<?=base_url()?>rcs/ammap/maps/js/worldLow.js" type="text/javascript"></script>
    <script  hrfer ="<?=base_url()?>rcs/ammap/maps/js/mexicoLow.js" type="text/javascript"></script>
    <link rel="stylesheet" href="ammap/ammap.css" type="text/css" media="all" />
</head>

<body>
    <header>
        <h1>Mapa</h1>
        <h4>Sólo de el click, sobre el estado!</h4>
        <div id="chartdiv" style="width: 600px; height: 400px;"></div>
        <script>
        
        var targetSVG = "M9,0C4.029,0,0,4.029,0,9s4.029,9,9,9s9-4.029,9-9S13.971,0,9,0z M9,15.93 c-3.83,0-6.93-3.1-6.93-6.93S5.17,2.07,9,2.07s6.93,3.1,6.93,6.93S12.83,15.93,9,15.93 M12.5,9c0,1.933-1.567,3.5-3.5,3.5S5.5,10.933,5.5,9S7.067,5.5,9,5.5 S12.5,7.067,12.5,9z";
        
        var map = AmCharts.makeChart( "chartdiv", {
          "type": "map",
          "theme": "light",

          "imagesSettings": {
            "rollOverColor": "#089282",
            "rollOverScale": 3,
            "selectedScale": 3,
            "selectedColor": "#089282",
            "color": "#13564e"
          },

          "zoomControl": {
            "buttonFillColor": "#15A892"
          },

          "areasSettings": {
            "unlistedAreasColor": "#15A892"
          },

          "dataProvider": {
            "map": "mexicoLow",
            
            //Agregar ícono con ciudades importantes... 
            "images": [{
                "id": "queretaro",
                "svgPath": targetSVG,
                "zoomLevel": 5,
                "scale": 2,
                "title": "Querétaro",
                "latitude":  20.5880600,
                "longitude": -100.3880600,
		"myUrl": "https://www.amcharts.com/"
            },{
                "id": "guadalajara",
                "svgPath": targetSVG,
                "zoomLevel": 5,
                "scale": 2,
                "title": "Guadalajara",
                "latitude": 20.6595,
                "longitude": -103.3497,
		"myUrl": "https://www.amcharts.com/"
            },{
                "id": "monterrey",
                "svgPath": targetSVG,
                "zoomLevel": 5,
                "scale": 2,
                "title": "Monterrey",
                "latitude": 25.6667,
                "longitude": -100.3167,
		"myUrl": "https://www.amcharts.com/"
            },{
                "id": "mexico",
                "svgPath": targetSVG,
                "zoomLevel": 5,
                "scale": 2,
                "title": "México",
                "latitude": 19.4284700,
                "longitude": -99.1276600,
		"myUrl": "https://www.amcharts.com/"	
            }]
          },

          "listeners": [ {
            "event": "clickMapObject",
            "method": function( event ) {
              window.location.href = event.mapObject.myUrl;
            }
          }]
        } );
            
        </script>
       
        <p id="resultado" style="font-weight: bold; margin-top: 6px;"></p>
    </header>
</body>

</html>
