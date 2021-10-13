<?php
//Para registrar
include('conexion.php');

$correo = $_POST["txtcorreo"];
$pass 	= $_POST["txtpassword"];
$user 	= $_POST["txtnombre"];

$queryusuario 	= mysqli_query($conne,"SELECT * FROM usuarios WHERE correo = '$correo'");
$nr 			= mysqli_num_rows($queryusuario); 

if ($nr == 0)
{
	$queryregistrar = "INSERT INTO usuarios(correo, pass, user) values ('$correo','$pass','$user')";
	

if(mysqli_query($conne,$queryregistrar))
{
	echo "<script> alert('Usuario registrado: $user');window.location= 'index.php' </script>";
}
else 
{
	echo "Error: " .$queryregistrar."<br>".mysql_error($conne);
}

}
else
{
		echo "<script> alert('No puedes registrar este correo: $correo');window.location= 'index.php' </script>";
}
?>