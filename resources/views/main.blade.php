<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bantu App</title>
    <script
        src="https://www.gstatic.com/charts/loader.js">
    </script>
</head>
<body>
    <div id="myChart" style="max-width:700px; height:400px"></div>
</body>
</html>

<script>
google.charts.load('current',{packages:['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

var data = google.visualization.arrayToDataTable([
  ['Jumlah Warga', 'CSR'],
  ['Belum Dapat', <?=$jumlah[0]->count?>],
  ["<?=$jumlah[1]->nama_bantuan?>", <?=$jumlah[1]->count?>],
  ["<?=$jumlah[2]->nama_bantuan?>", <?=$jumlah[2]->count?>],
  ["<?=$jumlah[3]->nama_bantuan?>", <?=$jumlah[3]->count?>]
  
]);

var options = {
  title: 'Rekap Warga'
};

var chart = new google.visualization.BarChart(document.getElementById('myChart'));
chart.draw(data, options);

}
</script>