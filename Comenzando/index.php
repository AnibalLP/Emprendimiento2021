<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, usuario, email, passwrd FROM users WHERE id = :id');
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
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Bienvenido</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid"> 
    <?php require 'partials/header1.php'?>   
    <?php if(!empty($user)): ?>
      <a class="text-center fs-3">Bienvenid@ <?= $user['usuario']; ?></a> 
    <?php else: ?>
      <h1 class="text-center fs-3">UNETE POR UN MUNDO MEJOR!!</h1>      
        <div class="container">
          <div class="m-4 d-flex justify-content-center align-items-center">
          <button type="button" class="btn btn-outline-primary" onclick="IniciarSesion();">Iniciar Sesión</button>&nbsp;&nbsp; ó &nbsp;&nbsp; <!--El código:  &nbsp;&nbsp;--><!--Sirve para hacer un espacio entre lineas-->
          <button type="button" class="btn btn-outline-info" onclick="Registrarse();">Registrarse</button>
          </div>
        </div>           
    <?php endif; ?>

    </div>
    <br>
    <br>
    <!--Inicio carrusel-->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../Comenzando/images/13.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../Comenzando/images/20.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../Comenzando/images/5.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
    <!--Fin carrusel-->
  <div class="container-fluid">
  
  <div class="card-body">
  <p class="text-center fs-3">Cuida Nuestro planeta, educa, fomenta, y aprende de que manera puedes salvar el planeta, apoya, por un medio ambiente sano!...</p>
  </div>
</div>

<!--FOOTER O PIE DE PÁGINA-->
<footer class="bg-dark text-white">
  <div class="container">
    <nav class="row">
      <!--LOGO-->
      <!--menu 1-->
      <ul class="col-3 list-unstyled"> <!--Esta clase quita las viñetas a los elementos li-->
        <li class="font-weight-bold text-uppercase">Resourse</li>
        <li><a href="#" class="text-reset">Link 1</a></li>
        <li><a href="#" class="text-reset">Link 2</a></li>
        <li><a href="#" class="text-reset">Link 3</a></li>
        <li><a href="#" class="text-reset">Link 4</a></li>
      </ul>
      <!--menu 2-->
      <ul class="col-3 list-unstyled"> <!--Esta clase quita las viñetas a los elementos li-->
        <li class="font-weight-bold text-uppercase">Quick links</li>
        <li><a href="#" class="text-reset">Link 1</a></li>
        <li><a href="#" class="text-reset">Link 2</a></li>
        <li><a href="#" class="text-reset">Link 3</a></li>
        <li><a href="#" class="text-reset">Link 4</a></li>
      </ul>
      <!--redes sociales-->
      <ul class="col-3 list-unstyled"> <!--Esta clase quita las viñetas a los elementos li-->
        <li class="font-weight-bold text-uppercase">Quick links</li>
        <li>
          <!--Facebook-->
          <a href="#" class="text-reset">Link 1</a>
          <!--Twitter-->
          <a href="#" class="text-reset">Link 1</a>
          <!--Instagram-->
          <a href="#" class="text-reset">Link 1</a>
          <!--Youtube-->
          <a href="#" class="text-reset">Link 1</a>
        </li>
      </ul>
      <!--marca registrada-->
      &copy;
    </nav>
  </div>
</footer>
<!--FIN DEL FOOTER O PIE DE PÁGINA-->

<script src="JS/Funciones.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>