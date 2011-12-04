<?php
session_start();
$sql="SELECT * FROM region";
$rs=$cnx->query($sql);
$ip=$_SERVER['REMOTE_ADDR'];
$sql2="select * from encuesta where ip='$ip'";
$rs2=$cnx->query($sql2);
$numreg=$rs2->rowCount();
if($numreg>0){
	$region=$_SESSION['region'];
	$sqlvotos="select calificacion, count(*) as cant from encuesta where codregion=$region group by calificacion asc";
	$rsvotos=$cnx->query($sqlvotos);
	$votos="";
	$ex=0;$mb=0;$b=0;$r=0;$m=0;$mm=0;
	while($reg=$rsvotos->fetchObject()){
		if($reg->calificacion=='Excelente') $ex=$reg->cant;
		if($reg->calificacion=='Muy Bueno') $mb=$reg->cant;
		if($reg->calificacion=='Bueno') 	$b=$reg->cant;
		if($reg->calificacion=='Regular')   $r=$reg->cant;
		if($reg->calificacion=='Malo')      $m=$reg->cant;
		if($reg->calificacion=='Muy Malo')  $mm=$reg->cant;
	}
	$total=$ex+$mb+$b+$r+$m+$mm; 
	if($total>=0)
	$ex=($ex/$total)*100;
	$mb=($mb/$total)*100;
	$b=($b/$total)*100;
	$m=($m/$total)/100;
	$mm=($mm/$total)/100;
	$img="https://chart.googleapis.com/chart?cht=bvs&chco=cc4444&chxt=x,y&chd=t:$ex,$mb,$b,$r,$m,$mm&chs=200x200&chl=Exc|M+B|B|R|M|M+M";
	
}
?>