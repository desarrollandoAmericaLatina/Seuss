<?php
if(isset($_POST['anio']))$anio=$_POST['anio'];
else $anio=2010;
$sql="SELECT r.iso, r.region as nom , i.* 
FROM pia i
JOIN region r ON i.codregion = r.codigo WHERE anio=$anio";
$rs=$cnx->query($sql);
$sw=1;$cont=0;
$filas="";
while($reg=$rs->fetchobject()){
$filas.="<tr><td>$reg->nom</td><td>$reg->ORDINARIOS</td><td>$reg->RECAUDADOS</td><td>$reg->OPERACIONES</td><td>$reg->DONACIONES</td><td>$reg->DETERMINADOS</td><td>$reg->TOTAL</td></tr>";
}
?>
