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
  </head>
  <body>
    <?php require 'partials/header1.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Login</h1>
    

    <form action="login.php" method="POST">
      <input name="email" type="text" placeholder="Ingresa tu email">
      <input name="passwrd" type="password" placeholder="Ingresa tu contraseña">
      <input type="submit" value="Acceder">
    </form>

    <button class="botones" ><a class="botones-RL" href="signup.php">Registrate</a></button>


  </body>
</html>