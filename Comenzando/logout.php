<?php
  session_start();

  session_unset();

  session_destroy();

  header('Location: /Emprendimiento2021/Comenzando/index.php');
?>