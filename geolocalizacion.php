<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geolocalizacion</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
       <div class="container">   
        <a class="nav-link" href="index.php">
           <h1 class="text-center color-white">Reused Plastic</h1>
        </a>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse bg-success p-2 text-dark bg-opacity-50 position-relative" id="navbarSupportedContent">
                <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link active" href="">Inicio</a>
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
        
<script
src="https://code.jquery.com/jquery-3.6.0.js" 
integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" 
crossorigin="anonymous">
</script>
<script>
      $(document).ready(function(){
	var altura = $('.navbar').offset().top;
	
	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('.navbar').addClass('navbar-fixed');
		} else {
			$('.navbar').removeClass('navbar-fixed');
		}
	});
});
</script>
</body>
</html>