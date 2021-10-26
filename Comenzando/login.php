<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /Emprendimiento2021/Comenzando/');
  }
  require 'database.php';

  if (!empty($_POST['email']) && !empty($_POST['passwrd'])) {
    $records = $conn->prepare('SELECT id, email, passwrd FROM users WHERE email=:email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (boolval($results) > 0 && password_verify($_POST['passwrd'], $results['passwrd'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: /Emprendimiento2021/Comenzando/index.php");
    } else {
      $message = '¡Lo siento, Las credenciales no coinciden!';
    }        
  }    
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <!--PARA QUE SE ADAPTE A CUALQUIER PANTALLA-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
    <?php require 'partials/header0.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Inicio de sesión</h1>
    

    <form action="login.php" method="POST">
      <input name="email" type="text" require pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" placeholder="Ingrese su email">
      <input name="passwrd" type="password" require pattern="[A-Za-z0-9¿?#$]{6,8}" placeholder="Ingrese su contraseña" title="Ejemplo: Persona1 - entre 6 y 8 caracteres">
      <input type="submit" value="Acceder">
    </form>

    <button class="botones" ><a class="botones-RL" href="signup.php">Registrate</a></button>
  </body>
</html>