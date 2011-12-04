<?php
if($numreg==0){ ?>
<form action="encuesta/gracias.php" method="post">
Seleccion su Region: <select name="region">
<?php while($reg=$rs->fetchobject()){?>
	<option value="<?php echo $reg->CODIGO ?>"><?php echo ucfirst(strtolower($reg->REGION))?></option>
<?php } ?>
</select>
<br />
Califique el Presupuesto P&uacute;blico en su regi&oacute;n teniendo en cuenta como ha sido administrado:<br />
<input name="califica" type="radio" value="Excelente" />Excelente<br />
<input name="califica" type="radio" value="Muy Bueno" />Muy Bueno<br />
<input name="califica" type="radio" value="Bueno" />Bueno<br />
<input name="califica" type="radio" value="Regular" />Regular<br />
<input name="califica" type="radio" value="Malo" />Malo<br />
<input name="califica" type="radio" value="Muy Malo" />Muy Malo<br /><br />
<button  class="button" type="submit">Aceptar</button>
<?php } else { 
echo "<img src='$img'>";
 } ?>