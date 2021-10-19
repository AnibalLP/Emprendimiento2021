<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, passwrd FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (boolval($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bienvenido</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <?php require 'partials/header1.php' ?>
    <?php if(!empty($user)): ?>
      <br> <a class="texto">Bienvenid@ <?= $user['email']; ?>
      <br>te has logeado!</a> 
      <a class="texto" href="logout.php">
        Salir
      </a>
    <?php else: ?>
      <h1>UNETE POR UN MUNDO MEJOR!!</h1>

      <a href="login.php">Inicia Sesion</a> o
      <a href="signup.php">Registrate</a>
    <?php endif; ?>

<div class="contenedor">
<div class="contenedor-cuerpo">
           <div class="titulo">Vision</div> 
                <p>Somos un equipo con capacidad de creación de software,contamos con los conocimientos
                necesarios para elaborarlos trabajos de una forma correcta mediante con todas las 
                metodologías del manifiesto ágil.</p> 
    </div>
    
    
    <div class="contenedor-cuerpo">
            <div class="titulo">Mision</div> 
            <div class="contenido">
                <p>Ser un equipo que cuente con los conocimientos necesarios a la hora de desarrollar software.</p>    
            </div>
        
    </div>
    <div class="anuncios">
    <h5>
        Videos recomendados
    </h5>
    </div>
    
</div>

    
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" 
  crossorigin="anonymous"></script>

  </body>
</html>