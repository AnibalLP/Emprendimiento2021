<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['usuario']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (usuario,email, passwrd) VALUES (:usuario, :email, :passwrd)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':usuario', $_POST['usuario']);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':passwrd', $password);

    if ($stmt->execute()) {
      $message = 'Usuario creado con éxito';
    } else {
      $message = 'Lo sentimos, hubo un problema al crear su cuenta.';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    
</head>
  <body>
  <?php require 'partials/header1.php' ?>
   

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Registro</h1>
    <form action="signup.php" method="POST">
    <input name="usuario" type="text" placeholder="Ingrese su nombre">
      <input name="email" type="text" placeholder="Ingrese su email">
      <input name="password" type="password" placeholder="Igrese una contraseña">
      <input name="confirm_password" type="password" placeholder="Confirme contraseña">
      <input type="submit" value="Enviar">
    </form>
    <button class="botones" ><a class="botones-RL" href="login.php">Iniciar Sesion</a></button> 

  </body>
</html>