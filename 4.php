<?php
header("refresh: 1");
$peserta = [
    [
        'nama' => 'Reza Ibrahim',
        'umur' => 23,
        'tinggi' => 173,
    ],
    [
        'nama' => 'Rudi',
        'umur' => 28,
        'tinggi' => 165,
    ],
    [
        'nama' => 'Iqbal',
        'umur' => 31,
        'tinggi' => 178,
    ],
    [
        'nama' => 'Bambang',
        'umur' => 40,
        'tinggi' => 168,
    ],
    [
        'nama' => 'Rusdi',
        'umur' => 25,
        'tinggi' => 170,
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>implementasi table php</title>
    <style>
    
    table {
    border-collapse: collapse;
    width: 40%;
    }
    
    th, td {
    border: 1px solid black;
    padding: 8px;
    text-align: left;
    }
    
    </style>
</head>
<body>
    <h1>table data peserta</h1>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Tinggi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($peserta as $index => $p): ?>
            <tr>

                <td><?= $index + 1; ?></td>
                <td><?= $p['nama']; ?></td>
                <td><?= $p['umur']; ?></td>
                <td><?= $p['tinggi']; ?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>