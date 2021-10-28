<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/Emprendimiento2021/Comenzando/">Reused Plastic</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Inicio</a>
        </li>
        <?php
                      if (isset($_SESSION['user_id'])) {
                          echo '
                          <li class="nav-item">
                          <a class="nav-link" href="welcome/tutoriales/form.php">Tutoriales</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="welcome/geolocalizacion.php">Map-Reciclaje</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="welcome/Foro/foro.php">Foro</a>
                        </li>
                      </ul>
                      
                      <button class="btn btn-light" type="button"><a  href="logout.php">Cerrar Sesion</a></button>
                      ';}?>
      
    </div>
  </div>
</nav>

</header>