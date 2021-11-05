<?php 
require("config.php");
$sqlVideo   = ("SELECT * FROM videos ORDER BY id DESC LIMIT 1");
$queryVideo = mysqli_query($con, $sqlVideo);
$totalVideo = mysqli_num_rows($queryVideo);
$DataVideo  = mysqli_fetch_array($queryVideo);
?>