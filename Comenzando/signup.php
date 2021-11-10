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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <?php require 'partials/header1.php' ?>


    <?php if(!empty($message)): ?>
    <p> <?= $message ?></p>
    <?php endif; ?>

    <h1 class="d-flex justify-content-center aling-center m-5">Registro</h1>
    <div class="d-flex justify-content-center rounded-3 rounded-lg">
        <form action="signup.php" method="POST">
            <input class="row justify-content-center m-3" name="usuario" type="text" placeholder="Ingrese su nombre" required>
            <input class="row justify-content-center m-3" name="email" type="text" placeholder="Ingrese su email" required>
            <input class="row justify-content-center m-3" name="password" type="password"
                placeholder="Ingrese una contraseña" required>
            <input class="row justify-content-center m-3" name="confirm_password" type="password"
                placeholder="Confirme contraseña" required>
            <input class="col-md-10 justify-content-center m-3" type="submit" value="Enviar">
        </form>

    </div>
    <div class="d-flex justify-content-center m-3">
        <button class="btn btn-primary m-2" style="background-color:#059228"><a
                class="text-decoration-none text-light fs-4" href="login.php">Iniciar Sesion</a></button>
    </div>
</body>

</html>