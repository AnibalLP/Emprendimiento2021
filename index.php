<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reused Plastic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header> <div>
        <img src="" alt=""> <h1>Reused Plastic</h1></div>
   

        <nav class="navbar">
            <div id="contenedor">
                <ul>
                        <li>
                        <a href="">Inicio</a>
                        </li>                   
                        <li> 
                        <a href="tutoriales.php">Tutoriales</a>
                        </li>            
                        <li>
                        <a href="geolocalizacion.php">MapReciclaje</a>
                        </li>
                        <li>
                        <a href="/foro/foro.php">Foro</a>
                        </li>
                </ul>
            </div>

           <!-- <div id="contenedor1">
                <ul>
                    <li>
                        <a href="">Ingresar</a>
                    </li>
                    <li>
                        <a href="">Registrar</a>
                    </li>
                </ul>
            </div>-->
        </nav>
    </header>
    <section class="home">
    <div id="in-flex">
                    Vivimos en una sociedad consumista y el ser humano actual satisface sus necesidades 
                    adquiriendo los productos que necesita, ya sean alimentos, ropa o cualquier tipo de 
                    objeto material
            </div>
            <div class="in-flex">
                Somos un equipo con capacidad de creación de software, contamos con los conocimientos 
                    necesarios para elaborar los trabajos de una forma correcta mediante con todas las metodologías
                    del manifiesto ágil.
            </div>
    </section>
            

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