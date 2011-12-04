<?php
require("conexion.php");
$sql="select * from opinion order by idopinion desc limit 0,5";
$rs=$cnx->query($sql);
?>
<div class="box"><h3>5 &Uacute;ltimas opiniones</h3>
				<ol class="inner">
<?php
$cont=1;
while($reg=$rs->fetchObject()){
  echo "<li><a href='#' onclick='ver_opinion($cont)'>$reg->nombre</a></li>";
  if($reg->nombre=="")$nombre='An&oacute;nimo';
  else $nombre=$reg->nombre;
  if($reg->foto!="")$foto="<img src='".$reg->foto."'>";
  else $foto="";
  $data[$cont]="<h4>Nombre:</h4>".$nombre."<br />Fecha:".$reg->fecha."<br />".$reg->opinion.
  "<br /> $foto";
  $cont++;
}
?>
</ol>
				</div>
<!-- /.box -->
			</div>
			<div class="mainContent">
			<br /><br />
				<div id="divopinion1" class="article" style="display:none"><?php echo $data[1]?></div>
				<div id="divopinion2" class="article" style="display:none"><?php echo $data[2]?></div>
				<div id="divopinion3" class="article" style="display:none"><?php echo $data[3]?></div>
				<div id="divopinion4" class="article" style="display:none"><?php echo $data[4]?></div>
				<div id="divopinion5" class="article" style="display:none"><?php echo $data[5]?></div>
				
			</div>
