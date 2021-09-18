<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bantu App - Bantuan</title>
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
</head>
<body>
    <table>
        <tr>
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
</body>
</html>