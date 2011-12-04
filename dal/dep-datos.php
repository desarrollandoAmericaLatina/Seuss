<?php
$sql1="SELECT r.iso, r.region AS nom, i.total, i.anio 
FROM pia i
JOIN region r ON i.codregion = r.codigo";
//WHERE r.iso =  '$iso'";
$rs1=$cnx->query($sql1);
$sql2="SELECT r.iso, r.region AS nom, i.total, i.anio 
FROM pim i
JOIN region r ON i.codregion = r.codigo";
//WHERE r.iso =  '$iso'";
$rs2=$cnx->query($sql2);
$sql3="SELECT r.iso, r.region AS nom, i.total, i.anio 
FROM ejecucion i
JOIN region r ON i.codregion = r.codigo";
//WHERE r.iso =  '$iso'";
$rs3=$cnx->query($sql3);

$cont=0;$data="";
while($reg1=$rs1->fetchobject()){
	$reg2=$rs2->fetchobject();
	$reg3=$rs3->fetchobject();
	$data.="data.setValue($cont, 0, '$reg1->nom');
      data.setValue($cont, 1, new Date ($reg1->anio,0,1));
      data.setValue($cont, 2, $reg1->total);
      data.setValue($cont, 3, $reg2->total);
      data.setValue($cont, 4, $reg3->total);";
	  $cont++;
}
/*
$sql="SELECT i.`sector pliegos` as nom , i.total
FROM pim i
JOIN region r ON i.codigo = r.codigo WHERE iso='$iso'";
$rs2=$cnx->query($sql);
$reg2=$rs->fetchobject();
$pim=$reg2->total;
$reg2->closeCursor();
$sql="SELECT e.`sector pliegos` as nom , e.total
FROM egreso e
JOIN region r ON e.codigo = r.codigo WHERE iso='$iso'";
$rs3=$cnx->query($sql);
$reg3=$rs->fetchobject();
$egr=$reg3->total;
$reg3->closeCursor();
$sw=1;$cont=0;
$iso="";$nom="";$total="";$color="";
while(){
*/
$numreg=$rs1->rowCount();
/*
$data="
      data.setValue(0, 0, 'D1');
      data.setValue(0, 1, new Date (2009,0,1));
      data.setValue(0, 2, 1000);
      data.setValue(0, 3, 300);
      data.setValue(0, 4, 200);
      data.setValue(1, 0, 'D1');
      data.setValue(1, 1, new Date (2010,0,1));
      data.setValue(1, 2, 950);
      data.setValue(1, 3, 200);
      data.setValue(1, 4, 500);
      data.setValue(2, 0, 'D2');
      data.setValue(2, 1, new Date (2009,0,1));
      data.setValue(2, 2, 300);
      data.setValue(2, 3, 250);
      data.setValue(2, 4, 500);
      data.setValue(3, 0, 'D2');
      data.setValue(3, 1, new Date(2010,1,1));
      data.setValue(3, 2, 1200);
      data.setValue(3, 3, 400);
      data.setValue(3, 4, 150);
      data.setValue(4, 0, 'D5');
      data.setValue(4, 1, new Date(2009,1,1));
      data.setValue(4, 2, 900);
      data.setValue(4, 3, 150);
      data.setValue(4, 4, 512);
      data.setValue(5, 0, 'D6');
      data.setValue(5, 1, new Date(2010,1,1));
      data.setValue(5, 2, 788);
      data.setValue(5, 3, 617);
      data.setValue(5, 4, 541);

";
*/
?>
