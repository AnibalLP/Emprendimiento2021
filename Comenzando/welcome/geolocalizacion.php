<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Reused Plastic</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<?php require '../partials/header3.php' ?>
<button class="boton"><a  href="logout.php">Cerrar Sesion</a></button>
	<div id ="mapa"> 
    <h1>Aquí ira nuestro mapa</h1>
    </div>
    <!--JAVASCRIP-->
        <script type="text/javascript">
        
        navigator.geolocation.getCurrentPosition(fn_ok, fn_error)
        
        var divMapa = document.getElementById('mapa');
        
        function fn_mal(){}
        function fn_ok(respuesta){
            
            var lat = respuesta.coords.latitud;   
            var lon = respuesta.coords.longitude;   
            var coordenada = lat+','+lon;

           
            //divMapa.innerHTML = 'Estamos mostrando su ubicación con éxito';
            divMapa.innerHTML = '<img src="http://maps.googleapis.com/maps/api/staticmap?size=700x400&markers='+coordenada'" />';
        }
        
        </script>
    
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYoCJkilVnx876MoAdlUuIef5bY31iBsg&callback=initMap"
    type="text/javascript"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" 
    crossorigin="anonymous"></script>
</body>
</html>