<!DOCTYPE html>
<html lang="es" class="h-100">

    <head>
        <meta charset="utf-8">
        <title>Reused Plastic</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>

    <body>
        <?php require '../../partials/header2.php' ?>

<!--INICIO DEL LINK DEL ARCHIVO QUE PERMITE MOSTRAR EL ÚLTIMO VIDEO-->
        <?php
        require 'muestraelultimovideo.php'
        ?>
<!--FIN DEL LINK DEL ARCHIVO QUE PERMITE MOSTRAR EL ÚLTIMO VIDEO-->


<!--INCIO DEL CÓDIGO PARA MOSTRAR EL ÚLTIMO VIDEO SUBIDO-->
        <div class="row text-center">
        <div class="col-6">
            <h3>LO MÁS RECIENTE</h3>
          <?php 
          if( $totalVideo >0){ ?>
          <h2><?php echo $DataVideo['nombreVideo']; ?></h2>

          <div class="video-responsive">
            <iframe src="<?php echo $DataVideo['urlVideo']; ?>"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
          </div>
        <?php }else{ ?>
        <h2>No hay Video</h2>
        <?php } ?>

        </div>

        <div class="col-6 text-center">
          <img  class="img-fluid" src="../../images/work.gif" alt="">
        </div>
      </div>
<!--FIN DEL CÓDIGO QUE MUESTRA EL ÚLTIMO VIDEO SUBIDO-->


<!--INICIO DEL CÓDIGO QUE AGREGA EL LINK DE LOS VIDEOS DE YOUTUBE-->
<div class="container mt-5 pd-5">
    <h2 class="text-center">Registrar Video en Reused Plastic</h2>
    <hr>

    <form action="recibVideoYoutube.php" method="post">
    <div class="form-group">
      <label for="nombreVideo">Nombre del Video</label>
      <input type="text" name="nombreVideo" class="form-control">
    </div>
    <div class="form-group">
      <label for="urlVideo">Pegar URL del Video <em>(Desde Youtube)</em></label>
      <input type="text" name="urlVideo" class="form-control">
    </div>
    <br>
      <div class="form-group mb-5">
        <button type="submit" class="btn btn-primary  btn-lg btn-block">Registrar Video</button>
    </div>

  </form>


<br><br>
<br><br>
  <?php 
   require("config.php");
    $sqlVideo   = ("SELECT * FROM videos ORDER BY id DESC ");
    $queryVideo = mysqli_query($con, $sqlVideo);

  ?>

<h2 class="text-center mt-5 mb-3">Mis Videos de Youtube</h2>
  <div class="table-responsive">
    <table class="table table-hover table-striped">
      <thead>
        <tr>
          <th>Titulo Video</th>
          <th class="text-center">Video</th>
           <th>Acción</th>
        </tr>
      </thead>
      <tbody>
      <?php
        while ($dataVideo = mysqli_fetch_array($queryVideo)) { ?>
        <tr>
          <td><?php  echo $dataVideo['nombreVideo']; ?></td>
          <td>
            <iframe width="253" height="200" src="<?php echo $dataVideo['urlVideo']; ?>"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </td>
          <td>
            <a href="deleteVideoYoutube.php?idVideo=<?php echo $dataVideo['id']; ?>" class="btn btn-danger" onclick="return confirm('Estás seguro que deseas eliminar el Video?');">Borrar video</a>
          </td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>

</div>

<!--FIN DEL CÓDIGO QUE AGREGA EL LINK DE LOS VIDEOS DE YOUTUBE-->
    
<footer class="mt-5" style="background-color: #61FF80">
<div class="container">
            <nav class="row">
                <!--LOGO-->


                <!--redes sociales-->
                <ul class="col-3 list-unstyled">
                    <!--Esta clase quita las viñetas a los elementos li-->
                    <li class="font-weight-bold text-uppercase">Redes Sociales</li>
                    <li>
                        <!--Youtube-->
                        <a href="https://www.youtube.com/channel/UCSGIYTI2AVAUz-ADgJKQh7g"><img src="https://img.icons8.com/ios/50/000000/youtube-play--v1.png"/></a>
                    </li>
                </ul>
                <!--marca registrada-->
                <div class="container">
                    <div class="m-4 d-flex justify-content-center align-items-center">
                        <!--Simbolo copyrigth    Espacio entre lineas   Simbolo marca registrada-->
                        Copyright &copy; Reused Plastic &nbsp;&nbsp; &reg; Todos los derechos reservados 2021
                    </div>
                </div>
            </nav>
        </div>
</footer>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script> <!-- Bootstrap CSS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
        </script>
    </body>
</html>