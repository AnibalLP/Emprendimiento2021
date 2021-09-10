<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geolocalizacion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<header>
        <nav class="navbar">
            <div id="contenedor">
                <ul>
                        <li>
                        <a href="index.php">Inicio</a>
                        </li>                   
                        <li> 
                        <a href="tutoriales.php">Tutoriales</a>
                        </li>            
                        <li>
                        <a href="geolocalizacion.php">MapReciclaje</a>
                        </li>
                        <li>
                        <a href="../foro.php">Foro</a>
                        </li>
                </ul>
            </div>

        </nav>
    </header>
        
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