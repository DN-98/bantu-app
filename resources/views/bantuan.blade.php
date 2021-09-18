<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bantu App - Bantuan</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    </style>
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
            <a class="nav-link" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/penerima">Penerima</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/bantuan">Bantuan</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <div class="container my-5 text-center ">
    <div class="row justify-content-center">
        <div class="col-4">
            <table class="table table-hover table-striped table-bordered">
                <h1>Bantuan</h1>
                <tr class="text-center">
                    <th>Nama Bantuan</th>
                    <th>Jumlah Bantuan</th>
                </tr>
                <?php foreach ($bantuan as $bantuan):?>
                <tr>
                    <td><?=$bantuan->nama_bantuan?></td>
                    <td><?=$bantuan->count?></td>
                </tr>
                <?php endforeach;?>
            </table>
        </div>
    </div>
    </div>
</body>
</html>

<script src="{{ asset('js/app.js') }}" defer></script>