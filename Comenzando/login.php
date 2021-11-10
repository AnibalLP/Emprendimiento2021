<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /Emprendimiento2021/Comenzando/');
  }
  require 'database.php';

  if (!empty($_POST['usuario']) && !empty($_POST['email']) && !empty($_POST['passwrd'])) {
    $records = $conn->prepare('SELECT id, usuario, email, passwrd FROM users WHERE email=:email');
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php require 'partials/header1.php' ?>

    <?php if(!empty($message)): ?>
    <p> <?= $message ?></p>
    <?php endif; ?>
    <h1 class="d-flex justify-content-center aling-center m-5">Inicio de sesión</h1>
    <div class="d-flex justify-content-center rounded-3 rounded-lg">
        <form class="" action="login.php" method="POST">
            <input class="row justify-content-center m-3" name="usuario" type="text" placeholder="Ingrese su nombre" required>
            <input class="row justify-content-center m-3" name="email" type="text" placeholder="Ingrese su email" required>
            <input class="row justify-content-center m-3" name="passwrd" type="password"
                placeholder="Ingrese su contraseña" required>
            <div class="d-flex justify-content-center m-3">
                <input class="d-flex btn btn-primary" style="background-color:#059228" type="submit" value="Acceder">
            </div>
        </form>
    </div>



    <div class="d-flex justify-content-center m-3">
        <button class="btn btn-primary m-2" style="background-color:#059228"><a
                class="text-decoration-none text-light fs-4" href="signup.php">Registrate</a></button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>