<?php
require_one("conexion.php");
$sql="SELECT r.iso, i.`sector pliegos` , i.total
FROM ingresos i
JOIN region r ON i.codigo = r.codigo";
$cnx->query($sql);
?>

<img src="https://chart.googleapis.com/chart?cht=map&chs=500x500
&chld=PE-LIM|PE-LAM|PE-ICA|PE-CUS|PE-LOR|PE
&chdl=Vancouver|Beijing|Torino|Athens|Salt+Lake+City
&chco=B3BCC0|5781AE|FF0000|FFC726|885E80|518274|F0F0AA
&chtt=Presupuesto+por+Departamentos
&chm=f2010+Winter,000000,0,0,10|
f2008+Summer,000000,0,1,10|
f2008+Winter,000000,0,2,10|
f2004+Summer,000000,0,3,10|
f2004+Summer,000000,0,4,10
&chma=0,110,0,0">