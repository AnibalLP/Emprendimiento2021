<header>
  <div class="navegacion">
        <nav class="nav">
            <div class="collapse">
            <a class="banner" href="/Emprendimiento2021/Comenzando/">Reused Plastic</a>
                        <?php
                      if (isset($_SESSION['user_id'])) {
                          echo '
                          <ul class="navbar">
               
                        <li class="nav-item">
                        <a class="nav-link active" href="">Inicio</a>
                        </li>                   
                        <li class="nav-item"> 
                        <a class="nav-link" href="welcome/tutoriales/form.php">Tutoriales</a>
                        </li>            
                        <li class="nav-item">
                        <a class="nav-link" href="welcome/geolocalizacion.php">MapReciclaje</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="welcome/Foro/foro.php">Foro</a>
                        </li>
                          <button><a class="botones-RL" href="logout.php">Cerrar Sesion</a></button>';
                      }
                        ?>
                       
                </ul>
            </div>
        </nav>
</header>