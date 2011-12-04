<?php 
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=excel.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
<table class="tabla" border="1">
<caption><?php echo $titulo?> - <?php echo $anio?> - <?php echo $titulo2?></caption>
<tr><th>REGION</th><TH>ORDINARIOS</TH><TH>RECAUDADOS</TH><TH>OPERACIONES</TH><TH>DONACIONES</TH><TH>DETERMINADOS</TH><TH>TOTAL</TH></tr>
<?php
echo $filas;
?>
</table>