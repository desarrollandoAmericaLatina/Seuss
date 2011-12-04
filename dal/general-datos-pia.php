<?php
if(isset($_POST['anio']))$anio=$_POST['anio'];
else $anio=2010;
$sql="SELECT r.iso, r.region as nom , i.total
FROM pia i
JOIN region r ON i.codregion = r.codigo WHERE anio=$anio";
$rs=$cnx->query($sql);
$sw=1;$cont=0;
$iso="";$nom="";$total="";$color="";
while($reg=$rs->fetchobject()){
if($sw==1)$iso.=$reg->iso; else $iso.="|".$reg->iso;
if($sw==1)$nom.=$reg->nom; else $nom.="|".$reg->nom;
$nom=str_replace(" ","+",$nom);
$t=substr($reg->total,0,strlen($reg->total)-6);
if($sw==1)$total.="f$t,000000,0,$cont,10"; else $total.="|f$t,000000,0,$cont,10";
$cont++;
$sw=0;
}
?>
