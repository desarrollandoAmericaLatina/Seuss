<?php
ini_set('display_errors','1');
?>
<html>
<head>
<title>PHP Wrapper for Google Chart API Examples - 0.5</title>

<style type="text/css">
img { display:block; }
</style>
</head>
<body>
<h1>PHP Wrapper for Google Chart API Examples - 0.5</h1>
<h1>Quick examples.</h1>

<?php
require ('gChart.php');
?>
<h2>Map Chart</h2>
<?php
$map = new gMapChart();
$map -> setZoomArea('south_america');
$map -> setStateCodes(array('PE-AMA','PE-LAM','PE-LOR','PE-ICA','PE-LIM'));
$map -> addDataSet(array(23, 32, 12, 54, 23));
$map -> setColors('342544', array('BE3481','34BE12'));
?>
<img src="<?php print $map->getUrl();  ?>" /> <br>
</body>
</html>