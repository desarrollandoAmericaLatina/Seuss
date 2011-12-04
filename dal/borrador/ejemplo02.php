<!--
You are free to copy and use this sample in accordance with the terms of the
Apache license (http://www.apache.org/licenses/LICENSE-2.0.html)
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Google Visualization API Sample</title>
  <script type="text/javascript" src="http://www.google.com/jsapi"></script>
  <script type="text/javascript">
    google.load('visualization', '1', {packages: ['geomap']});

    function drawVisualization() {
      var data = new google.visualization.DataTable();
      data.addRows(6);
      data.addColumn('string','2', 'Departamento');
      data.addColumn('number', 'Presupuesto');
      data.setValue(0, 0, 'PE-LIM');
      data.setValue(0, 1, 200);
      data.setValue(1, 0, 'PE-ICA');
      data.setValue(1, 1, 300);
      data.setValue(2, 0, 'PE-LOR');
      data.setValue(2, 1, 400);
      data.setValue(3, 0, 'PE-PIU');
      data.setValue(3, 1, 500);
      data.setValue(4, 0, 'PE-TUM');
      data.setValue(4, 1, 600);
      data.setValue(5, 0, 'PE-TAC');
      data.setValue(5, 1, 700);
      
      var geomap = new google.visualization.GeoMap(
          document.getElementById('visualization'));
      geomap.draw(data, null);
    }
    

    google.setOnLoadCallback(drawVisualization);
  </script>
</head>
<body style="font-family: Arial;border: 0 none;">
<div id="visualization" style="width: 800px; height: 400px;"></div>
</body>
</html>
