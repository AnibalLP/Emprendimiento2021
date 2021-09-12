<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geolocalizacion</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style> 
  	  #map {
        height: 100%;
      }
     
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
	</style> 
</head>

<body>
    
<div class="encabezado">   
        <a class="enca" href="index.php">Reused Plastic</a>
        </div>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="collapse navbar-collapse  p-2 text-dark bg-opacity-50 position-relative" id="navbarSupportedContent">
                <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link active" href="index.php">Inicio</a>
                        </li>                   
                        <li class="nav-item"> 
                        <a class="nav-link" href="tutoriales.php">Tutoriales</a>
                        </li>            
                        <li class="nav-item">
                        <a class="nav-link" href="geolocalizacion.php">MapReciclaje</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="Foro/foro.php">Foro</a>
                        </li>
                </ul>
            </div>
        </nav> 
		<div id ="map"> </div> 
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYoCJkilVnx876MoAdlUuIef5bY31iBsg&callback=initMap"
  type="text/javascript"></script>
	<script>
		
      var map;
  	 function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
		  center: {lat: 13.56740377955887 , lng: -89.80803208576839},
    center: {lat: 13.715536684597252 , lng: -89.29299331274571},
          zoom: 9,
        });
        var marker = new google.maps.Marker({
          position: {lat: 13.56740377955887, lng: -89.80803208576839},
    
          map: map,
	  title: 'Centro de reciclaje'
        });
        var marker2 = new google.maps.Marker({
          position: {lat:13.715536684597252 , lng:-89.29299331274571 },
          map: map,
	  title: 'Recicladora los tecleños'
        });
        var marker3 = new google.maps.Marker({
          position: {lat: 14.018053265856617, lng: -89.16368920532365 },
          map: map,
	  title: 'Recicladora troncal'
        });
      
        var marker3 = new google.maps.Marker({
          position: {lat:13.770959087561138 , lng:-88.07424762268009  },
          map: map,
	  title: 'Planta de transferencia'
        }); 
      }
     
      
      
      /* map = new google.maps.Map(document.getElementById('map'), {
		  center: {lat: 13.715536684597252 , lng: -89.29299331274571}, //13.715536684597252, -89.29299331274571
          zoom: 13,
        });
      
      }*/
     
      
	</script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" 
  crossorigin="anonymous"></script>
</body>
</html>