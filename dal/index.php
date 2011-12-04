<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Presupuestando.pe</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
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
			<li><a href="index.php" class="current"><span>INICIO</span></a></li>
			<li><a href="opinion.php"><span>TU OPINION</span></a></li>
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
			<h1>Infórmate<span>del Presupuesto  </span><em>de tu Región </em></h1>
			<p>Bienvenido al sitio web con la mejor información del Presupuesto Público Peruano.</p>
			<div class="wrapper"><a href="p1.php" class="button">Presupuesto</a></div>
		</div>
<!-- /.intro-text -->
	</div>
</div>
<!-- content -->
<div id="content"> 
	<div class="container">
		<div class="wrapper">
			<div class="aside">
				
<!-- .box -->
				<div class="box">
				<?php require_once("encuesta/index.php") ?>
				</div>
                <!-- /.box -->
			</div>
			<div class="mainContent">
				<div class="article">
					<h2>Qu&eacute; es <em>Presupuestando.pe</em></h2>
					<p><strong class="txt1">Presupuestando.pe</strong> es un sitio web que ofrece información acerca del Presupuesto Institucional de Apertura (PIA), Presupuesto Institucional Modificado (PIM) y Ejecución del Gasto de inversión del Gobierno Regional a toda la población peruana.</p> 
					<div class="img-box">
						<a href="opinion.php"><img src="images/tuopinion.png" alt="tu opinion" width="165" height="189" border="0" /></a> </div>
					Ir a : <a href="opinion.php">Tu Opini&oacute;n</a>, <a href="datos.html">Datos</a>, <a href="estrategia.html">Estrategia</a>.
				</div>
				
				
			</div>
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