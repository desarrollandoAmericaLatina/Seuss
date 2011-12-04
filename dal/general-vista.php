<form action="" method="post">
A&ntilde;o<select name="anio">
<option value="2010">2010</option>
<option value="2009" <?php if($anio==2009) echo "selected"?>>2009</option>
</select>
<button type="submit">Graficar</button>
</form>
<h4><?php echo $titulo?> - <?php echo $anio?></h4>
<h5><?php echo $titulo2?></h5>
<img src="https://chart.googleapis.com/chart?cht=map&chs=600x500
&chld=<?php echo $iso?>
&chdl=<?php echo $nom?>
&chco=B3BCC0|5781AE|FF0000|FFC726|885E80|518274|F0F0AA|
BFB0C0|5781AE|FF0000|FFC726|885E80|518274|11F0AA|
550CC0|5781AE|FFAA00|8FC726|8F5E80|51FF74|F020AA|
B352C0|5781AE|FF00FF|55C726|8F5E80|51FF74
&chm=<?php echo $total?>
&chma=0,0,0,0|100,100">