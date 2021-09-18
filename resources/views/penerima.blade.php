<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table, tr, td, th{
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
            padding: 10px;
        }

        th{
            background-color: aqua;
        }
    </style>
    <title>Bantu App - penerima</title>
</head>
<body>
    <table>
        <tr>
            <th>Nama Warga</th>
            <th>No KK Warga</th>
        </tr>
        <?php foreach ($penerima as $warga):?>
        <tr>
            <td><?=$warga->nama_warga?></td>
            <td><?=$warga->nokk_warga?></td>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>