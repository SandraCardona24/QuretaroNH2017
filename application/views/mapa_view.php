<!DOCTYPE html>
<html>

<head>
    <title>AdminNeoris | Seleccionar Sede</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url()?>rsc/css/bootstrap.min.css">
	  <link rel="stylesheet" href="<?=base_url()?>rsc/css/font-awesome.min.css">
	  <link rel="stylesheet" href="<?=base_url()?>rsc/css/ionicons.css">
	  <link rel="stylesheet" href="<?=base_url()?>rsc/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?=base_url()?>rsc/ammap/ammap.css" type="text/css" media="all" />

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?=base_url()?>rsc/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=base_url()?>rsc/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?=base_url()?>rsc/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url()?>rsc/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?=base_url()?>rsc/plugins/iCheck/square/blue.css">
    <!-- Custom -->
    <link rel="stylesheet" href="<?=base_url()?>rsc/css/login.css">
    <link rel="stylesheet" href="<?=base_url()?>rsc/css/mapa.css">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <script src="<?=base_url()?>rsc/js/jquery.min.js"></script>
    <script src="<?=base_url()?>rsc/ammap/ammap.js" ></script>
    <script src="<?=base_url()?>rsc/ammap/maps/js/mexicoLow.js"></script>
</head>

<body class="hold-transition login-page">
    
    <div class="wrapper">
        <div class="login-box">
            <div class="login-logo">
                <a href="./index.html"><img src="<?=base_url()?>rsc/img/logo.png" alt="Neoris"><!--<b>Admin</b>Neoris--></a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <p style="text-align: center;">Selecciona la sede a administrar</p>
                <div id="chartdiv"></div>
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
                            "myUrl": "<?=base_url()?>index.php/Admin"
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
            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->
    </div>

    <!-- jQuery 3 -->
    <script src="<?=base_url()?>rsc/js/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?=base_url()?>rsc/js/bootstrap.min.js"></script>
    <!-- iCheck -->

</body>

</html>
