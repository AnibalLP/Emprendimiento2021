<!DOCTYPE html>
<html lang="es" class="h-100">
  <head>
    <meta charset="utf-8">
    <title>Reused Plastic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../assets/css/style.css">
     <?php  
        include("../../database.php");
     
        if(isset($_POST['video_upload'])){
            //El primer conjunto es en bytes
            $maxsize = 1024242880; // 1GB
            $nombre_file = $_FILES['file_video']['name'];
			//
			$image_info = explode(".", $nombre_file);
			$nombre =format_uri($image_info[0]);
			$image_type = end($image_info);
			$file_video = $nombre."-".rand(10,999).".".$image_type;
			//
            $target_dir = "videos/";
            $target_file = $target_dir.$file_video;

            // Obtenemos la extension del archivo
            $videoFileType = strtolower(pathinfo($nombre_file,PATHINFO_EXTENSION));

            // extensiones validados
            $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

            // Revisar extension
            if( in_array($videoFileType,$extensions_arr) ){
                
                // Revisar el tamaÃ±o del archivo
                if(($_FILES['file_video']['size'] >= $maxsize) || ($_FILES["file_video"]["size"] == 0)) {
                    $error= "Archivo demasiado grande. El archivo debe ser menor que 5MB.";
                }else{
                    // Subir
                    if(move_uploaded_file($_FILES['file_video']['tmp_name'],$target_file)){
                        // Insertar registro
						$nombre = htmlentities($_POST['nombre']);
						$query = $conn->prepare("INSERT INTO `videos`(`id_user`,`nombre`, `ubicacion`)
						VALUES (:id_user,:nombre,:ubicacion)");
						$query->bindParam(":id_user", $idu);            
						$query->bindParam(":nombre", $nombre);
						$query->bindParam(":ubicacion", $file_video);
						$query->execute();
						    if($query->rowCount() > 0){
								header("location:form.php?estado=ok");
							}
                    }
                }

            }else{
                $error= "la extension del archivo es invalido. Las extensiones permitidas son: mp4, avi, 3gp, mov, mpeg";
            }
        
        }
        ?>
    </head>
    <body>
    <?php require '../../partials/header2.php' ?>
  
<main role="main" class="flex-shrink-0">

<div class="contain">
  <?php
  if(isset($error)){
	echo '<div class="alert alert-danger" role="alert"> '.$error.'</div>';
	}
  ?>
  <?php
  if(isset($_GET["estado"])){
	/*echo '<div class="alert alert-success" role="alert"> Video subido correctamente</div>';*/
	}
  ?>  
    <div class="row">
    
    <form method="post" action="" enctype='multipart/form-data'>
          <div class="form-grop">
            <label for="exampleInputEmail1">Subir Video</label>
            <input name="nombre" type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese nombre">
          </div>
          <div class="form-group">
          

<div class="custom">
  <input name="file_video" type="file" class="custom-file-input" id="customFile" required>
  <label class="custom" for="customFile"></label>
</div>
<script>

$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
          </div>
          <button type="submit" class="btn btn-primary" name='video_upload'>Subir Video</button>
	</form>

 </div>
 </div>
 </main>

 <div class="container">
    <div class="row">
     <?php
    $query = $conn->prepare("SELECT * FROM videos ORDER BY nombre DESC");
    $query->execute();
    $data = $query->fetchAll();
        foreach ($data as $row):
            $idu=$row['id_user']; 
            $nombre=$row['nombre'];
            $ubicacion = $row['ubicacion'];
            echo "<div'>";
            echo "<h3>$nombre</h3>";
            echo "<video src='videos/".$ubicacion."' controls width='250px' height='250px' >";
            echo "</div>";
        endforeach;
        ?>    
</div>
 </div>
 

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>    <!-- Bootstrap CSS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>