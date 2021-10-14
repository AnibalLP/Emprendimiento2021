<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0" >
    <title>Reused Plastic</title>
    <link rel="stylesheet" href="../../css/estilos.css">
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
                        <a class="nav-link " href="../../index.php">Inicio</a>
                        </li>                   
                        <li class="nav-item"> 
                        <a class="nav-link active" href="">Tutoriales</a>
                        </li>            
                        <li class="nav-item">
                        <a class="nav-link" href="../geolocalizacion.php">MapReciclaje</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="../Foro/foro.php">Foro</a>
                        </li>
                </ul>
            </div>
        </nav>

        <div>
        <form action="upload.php" method="POST" enctype="multipart/form-data" >
    <h2>Subir Tutorial</h2>
    <input type="file" name="file">
    <p class="center" ><input type="submit" value="Subir archivo"></p>
    </form>
        </div>

    
        
          
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" 
  crossorigin="anonymous"></script>
</body>
</html>