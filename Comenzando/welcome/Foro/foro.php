<?php

  require '../../database.php';

    $sql = "INSERT INTO foro (sms,reaccion) VALUES ( :sms, :reaccion)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':sms', $_POST['sms']);
    $stmt->bindParam(':reaccion', $POST['reaccion']);
	$escribio=null;


	
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <?php require '../../partials/header4.php' ?>

    <div class="container-fluid">
        <!-- Content here -->
        <div class="container">
            <!-- Content here -->
            <div class="d-flex bg-primary m-5">
            <?php    
			
			?>
            </div>
        </div>

        <div class="container">

            <form method="POST">
                <div class="form-group">
					<input name="sms" type="text" class="form-control"  placeholder="Escribe tu mensaje">
					<input name="reaccion" type="text" class="form-control"  placeholder="Escribe tu mensaje">
					<input type="submit" value="Enviar">
				</div>
            </form>

        </div>
    </div>

	<?php if(!empty($mensaje)): ?>
      <p> <?= $mensaje ?></p>
    <?php endif; ?>

</body>

</html>