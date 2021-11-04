<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Reused Plastic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <?php require '../partials/header3.php' ?>

    <div id="mapa">
        <h1>Aquí ira EL mapa</h1>
    </div>

    <script type="text/javascript">
    navigator.geolocation.getCurrentPosition(fn_ok, fn_error)

    var divMapa = document.getElementById('mapa');

    function fn_mal() {}

    function fn_ok(respuesta) {

        var lat = respuesta.coords.latitud;
        var lon = respuesta.coords.longitude;
        var coordenada = lat + ',' + lon;



        divMapa.innerHTML = '<img src="http://maps.googleapis.com/maps/api/staticmap?size=700x400&markers=' +
            coordenada '" />';
    }
    </script>

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYoCJkilVnx876MoAdlUuIef5bY31iBsg&callback=initMap"
        type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
<?php include("../partials/footer.php") ?>
</body>

</html>