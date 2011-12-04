<link href="style2.css" rel="stylesheet" type="text/css" />
<form action="" method="post">
A&ntilde;o<select name="anio">
<option value="2010">2010</option>
<option value="2009" <?php if($anio==2009) echo "selected"?>>2009</option>
</select>
<button type="submit">Graficar</button>
</form>
<h4><?php echo $titulo?> - <?php echo $anio?></h4>
<h5><?php echo $titulo2?></h5>
<table class="tabla" border="1">
<tr><th>REGION</th><TH>ORDINARIOS</TH><TH>RECAUDADOS</TH><TH>OPERACIONES</TH><TH>DONACIONES</TH><TH>DETERMINADOS</TH><TH>TOTAL</TH></tr>
<?php
echo $filas;
?>
</table>
<a href="xls6.php?a=<?php echo $anio?>" target="_blank"><img src="images/excel-icon.png" width="50" height="50" /></a>