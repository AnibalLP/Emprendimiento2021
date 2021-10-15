<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0" >
    <title>Reused Plastic</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
<div class="encabezado">   
        <a class="enca" href="">Reused Plastic</a>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark align-center">
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item">
                        <a class="nav-link " href="../index.php">Inicio</a>
                        </li>                   
                        <li class="nav-item"> 
                        <a class="nav-link" href="tutoriales/form.php">Tutoriales</a>
                        </li>            
                        <li class="nav-item">
                        <a class="nav-link active" href="">MapReciclaje</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="../welcome/Foro/foro.php">Foro</a>
                        </li>
                </ul>
            </div>
        </nav>
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