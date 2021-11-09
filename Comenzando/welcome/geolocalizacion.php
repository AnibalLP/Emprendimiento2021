<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Reused Plastic | Geolocalización</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <?php require '../partials/header3.php' ?>

    <!--INICIO DE LA GEOLOCALIZACIÓN-->
    <button onclick="findme();">Mostrar ubicación</button>
    <div id="map"></div>

    <script>
        function findme(){
            var output = document.getElementById('map');
            //Verifica si nuestro navegador soporta geolocalización
            if (navigator.geolocation){
                output.innerHTML = "<p>Tu navegador soporta geolocalización</p>";
            }else{
                output.innerHTML = "<p>Tu navegador no soporta geolocalización</p>";
            }

            //Obtenemos latitud y longitud
            function localizacion(posicion){
                var latitude = posicion.coords.latitude;
                var longitude = posicion.coords.longitude;

                output.innerHTML = "<p>latitud: "+latitude+"<br>Longitud: "+longitude+"</p>";
            }
            
            function error(){
                output.innerHTML = "<p>No se pudo obtener tu ubicación</p>";
            }

            //Le pasamos la localización y el error
            navigator.geolocation.getCurrentPosition(localizacion, error);
        }
    </script>
    <!--FIN DE LA GEOLOCALIZACIÓN-->

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYoCJkilVnx876MoAdlUuIef5bY31iBsg&callback=initMap"
        type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
<?php include("../partials/footer.php") ?>
</body>

</html>