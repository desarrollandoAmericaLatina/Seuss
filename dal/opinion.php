<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Presupuestando.pe</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link href="style3.css" rel="stylesheet" type="text/css" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script type="text/javascript">
function ver_opinion(id){
 document.getElementById('divopinion1').style.display="none";
 document.getElementById('divopinion2').style.display="none";
 document.getElementById('divopinion3').style.display="none";
 document.getElementById('divopinion4').style.display="none";
 document.getElementById('divopinion5').style.display="none";
 if(id==1)document.getElementById('divopinion1').style.display="";
 if(id==2)document.getElementById('divopinion2').style.display="";
 if(id==3)document.getElementById('divopinion3').style.display="";
 if(id==4)document.getElementById('divopinion4').style.display="";
 if(id==5)document.getElementById('divopinion5').style.display="";
}
</script>
<!--[if lt IE 7]>
	<link href="ie_style.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body id="page1">
<!-- header -->
<div id="header">
	<div class="container">
<!-- .logo -->
		<div class="logo">
			<a href="index.php"><img src="images/logo.gif" alt="" /></a>
		</div>
<!-- /.logo -->
<!-- .nav -->
<ul class="nav">
			<li><a href="index.php"><span>INICIO</span></a></li>
			<li><a href="opinion.php" class="current"><span>TU OPINION</span></a></li>
			<li><a href="datos.html"><span>DATOS</span></a></li>
			<li><a href="estrategia.html"><span>ESTRATEGIA</span></a></li>
	  </ul>
<!-- /.nav -->
<!-- .extra-box -->
		<div class="extra-box">
			<div class="inner">
				<h2>Presupuesto<span>Informaci&Oacute;n</span></h2>
				<ul>
					<li><a href="p1.php">Presupuesto Institucional Regional por Año</a></li>
					<li><a href="p2.php">Prespuesto Institucional de Apertura por Año</a></li>
					<li><a href="p3.php">Prespuesto Institucional de Modificado por Año</a></li>
					<li><a href="p4.php">Ejecuci&oacute;n del Gasto por Año</a></li>
					<li><a href="p5.php">Gr&aacute;fico Comparativo</a></li>
					<li><a href="p6.php">Detalle de P.I.A</a></li>
					<li><a href="p7.php">Detalle de P.I.M</a></li>
					<li><a href="p8.php">Detalle de E.G</a></li>
				</ul>
				
			</div>
		</div>
<!-- /.extra-box -->
<!-- .intro-text -->
		<div class="intro-text">
			<h1>Tu Opini&oacute;n <span>es Importante </span><em>Registra tu opini&oacute;n  </em></h1>
			<div class="wrapper">
			<form action="registro.php" method="post" enctype="multipart/form-data">
			Sugiere a tus autoridades, en qu&eacute; proyectos se podr&iacute;a invertir? <br />
			Qu&eacute; es lo que tu ciudad o regi&oacute;n necesita con mayor prioridad?<br />
			<br />Nombre: 
			<input name="nombre" size="40" /><br />
			Regi&oacute;n: <select name="region">
			<?php require("conexion.php"); 
			$rs=$cnx->query("select * from region");
			while($reg=$rs->fetchObject()){
			 echo "<option value='$reg->CODIGO'>$reg->REGION</option>";
			} ?>
			</select><br />
			<textarea name="opinion" cols="60" rows="5"></textarea><br />
			Foto: <input type="file" name="foto" /><br />
			<button class="button" type="submit">Enviar</button>
			</form>
			</div>
		</div>
<!-- /.intro-text -->
	</div>
</div>
<!-- content -->
<div id="content"> 
	<div class="container">
		<div class="wrapper">
			<div class="aside">
				
<!-- .box --><?php require_once("5opiniones.php");?>
				
		</div>
	</div>
</div>
<!-- footer -->
<div id="footer">
	<div class="container">
		Grupo: SeUSS
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>