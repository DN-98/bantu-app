<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Bantu App</title>
    <script
        src="https://www.gstatic.com/charts/loader.js">
    </script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom px-3 py-3" aria-label="Fifth navbar example">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Bantu App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/penerima">Penerima</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/bantuan">Bantuan</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container my-5  ">
      <div class="row justify-content-center">
        <div class="col-6">
          <div id="myChart" style="max-width:700px; height:400px"></div>
        </div>
      </div>
    </div>
</body>
</html>

<script>
google.charts.load('current',{packages:['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

var data = google.visualization.arrayToDataTable([
  ['Jumlah Warga', 'Jumlah'],
  ['BELUM DAPAT', <?=$jumlah[0]->count?>],
  ["<?=$jumlah[1]->nama_bantuan?>", <?=$jumlah[1]->count?>],
  ["<?=$jumlah[2]->nama_bantuan?>", <?=$jumlah[2]->count?>],
  ["<?=$jumlah[3]->nama_bantuan?>", <?=$jumlah[3]->count?>]
  
]);

var options = {
  title: 'REKAP PENYALURAN CSR'
};

var chart = new google.visualization.BarChart(document.getElementById('myChart'));
chart.draw(data, options);

}
</script>