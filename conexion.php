<?php
$conne = new mysqli("localhost","root","","login");
if($conne->connect_errno)
echo "no hay conexion:(".$conne->connect_errno .  ")" .$conne->connect_error
?>