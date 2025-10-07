<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background: #000000ff;
                color: #ffffffff;
                margin: 20px;
            }
        </style>
    </head>
    <body>
        <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdani',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan',
        ];
        echo "Nama : {$Dosen['nama']} <br>";
        echo "Domisili : {$Dosen['domisili']} <br>";
        echo "Jenis Kelamin : {$Dosen['jenis_kelamin']} <br>";
        ?>
    </body>
</html>