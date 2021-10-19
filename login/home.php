<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Inicio</title>
       
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Reused Plastic</h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
        <?php
        include('../menu.php')
        ?>
        <div class="container">
           <div class="titulo">Vision</div> 
           <div class="contenido">
                <p>Somos un equipo con capacidad de creación de software,contamos con los conocimientos
                necesarios para elaborarlos trabajos de una forma correcta mediante con todas las 
                metodologías del manifiesto ágil.</p> 
            </div>
    </div>
    
    
    <div class="container">
            <div class="titulo">Mision</div> 
            <div class="contenido">
                <p>Ser un equipo que cuente con los conocimientos necesarios a la hora de desarrollar software.</p>    
            </div>
        
    </div>

    <div class="grid col-6">
    <h5>
        Videos recomendados
    </h5>
    </div>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" 
  crossorigin="anonymous"></script>
	</body>
</html>