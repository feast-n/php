<?php
header("refresh: 1");

$nama = "Reza";
if ($nama == "Reza") {
    echo "Nama saya adalah Reza";
} else {
    echo "Nama saya bukan Reza";
}

$nilai = 100;
if ($nilai >= 75) {
    echo "<br>";
    echo "Selamat anda lulus";
} else {
    echo "<br>";
    echo "Maaf, anda tidak lulus";
}

$peserta = [
    ['nama' => 'Reza Ibrahim', 'umur' => 23, 'tinggi' => 173, 'kelas' => 'A'],
    ['nama' => 'Rudi',         'umur' => 28, 'tinggi' => 165, 'kelas' => 'B'],
    ['nama' => 'Iqbal',        'umur' => 31, 'tinggi' => 178, 'kelas' => 'C'],
    ['nama' => 'Bambang',      'umur' => 40, 'tinggi' => 168, 'kelas' => 'D'],
    ['nama' => 'Rusdi',        'umur' => 15, 'tinggi' => 170, 'kelas' => 'E'],
    ['nama' => 'Fahmi Anwar',  'umur' => 22, 'tinggi' => 175, 'kelas' => 'A'],
    ['nama' => 'Siti Aminah',  'umur' => 26, 'tinggi' => 160, 'kelas' => 'B'],
    ['nama' => 'Dewi Lestari', 'umur' => 19, 'tinggi' => 163, 'kelas' => 'C'],
    ['nama' => 'Hendro Prasetyo','umur' => 35, 'tinggi' => 180, 'kelas' => 'D'],
    ['nama' => 'Gilang Permana','umur' => 24, 'tinggi' => 172, 'kelas' => 'E'],
];

echo "<br>";

$hari = 'kamis';
switch ($hari) {
    case "senin":
        echo "hari ini adalah hari senin";
        break;
    case "selasa":
        echo "hari ini adalah hari selasa";
        break;
    default:
        echo "hari ini bukan hari senin ataupun selasa.";
}

function cekumur($umur) {
    if ($umur >= 17) { 
        return "Sudah memiliki KTP";
    } else {
        return "Belum memiliki KTP";
    }
}

function namakelas($kelas) {
    switch ($kelas) {
        case 'A':
            return "Kelas Desain Grafis Madya";
        case 'B':
            return "Kelas Junior Web Developer";
        case 'C':
            return "Kelas Cyber Security";
        case 'D':
            return "Kelas Bahasa Inggris";
        case 'E':
            return "Kelas Jaringan Komputer";
        default:
            return "Tidak ada kelas";
    }
}
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
            width: 50%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Table Data Peserta</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Tinggi</th>
                <th>Kelas</th>
                <th>Status KTP</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($peserta as $index => $p): ?>
            <tr style="background-color: <?= ($p['umur'] >= 25) ? '#ffcccc' : 'transparent'; ?>;">
                <td><?= $index + 1; ?></td>
                <td><?= $p['nama']; ?></td>
                <td><?= $p['umur']; ?></td>
                <td><?= $p['tinggi']; ?></td>
                <td>
                    <?= namakelas($p['kelas']); ?>
                </td>
                <td>
                    <?= cekumur($p['umur']); ?> 
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>