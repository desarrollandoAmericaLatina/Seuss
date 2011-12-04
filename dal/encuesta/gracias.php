<?php
session_start();
require_once("conexion.php");
$idr = $_POST['region'];
$_SESSION['region']=$idr;
$cal = $_POST['califica'];
$ip=$_SERVER['REMOTE_ADDR'];
$sql = "INSERT INTO encuesta VALUES ('','".$idr."','".$cal."','$ip')";
$cnx->query($sql);
header("location: ../index.php");
?>