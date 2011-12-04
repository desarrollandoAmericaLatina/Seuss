<?php
require_once("conexion.php");
$nr=$_FILES['foto']['name'];
$temp=$_FILES['foto']['tmp_name'];
$tam=$_FILES['foto']['size'];
$tipo=$_FILES['foto']['type'];
$ahora=date("ymdhis");
copy($temp,"fotos/".$ahora.$nr);
$foto="fotos/".$ahora.$nr;
if (isset($_POST['nombre'])) $nom=$_POST['nombre'];
else $nom="Anonimo";
$opi=$_POST['opinion'];
$fecha=date("Y-m-d");
$sql="insert into opinion (nombre,opinion,fecha,foto) values('$nom','$opi','$fecha','$foto')";
$cnx->query($sql);
header("location: opinion.php");
?>