<?php
header("refresh: 1");

// Pengecekan Nama
$nama = "Reza";
if ($nama =="Reza") {
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
    [
        'nama' => 'Reza Ibrahim',
        'umur' => 23,
        'tinggi' => 173,
        'kelas' => 'A',
    ],
    [
        'nama' => 'Rudi',
        'umur' => 28,
        'tinggi' => 165,
        'kelas' => 'B',
    ],
    [
        'nama' => 'Iqbal',
        'umur' => 31,
        'tinggi' => 178,
        'kelas' => 'C',
    ],
    [
        'nama' => 'Bambang',
        'umur' => 40,
        'tinggi' => 168,
        'kelas' => 'D',
    ],
    [
        'nama' => 'Rusdi',
        'umur' => 15,
        'tinggi' => 170,
        'kelas' => 'E',
    ],
    [
        'nama' => 'Fahmi Anwar',
        'umur' => 22,
        'tinggi' => 175,
        'kelas' => 'A',
    ],
    [
        'nama' => 'Siti Aminah',
        'umur' => 26,
        'tinggi' => 160,
        'kelas' => 'B',
    ],
    [
        'nama' => 'Dewi Lestari',
        'umur' => 19,
        'tinggi' => 163,
        'kelas' => 'C',
    ],
    [
        'nama' => 'Hendro Prasetyo',
        'umur' => 35,
        'tinggi' => 180,
        'kelas' => 'D',
    ],
    [
        'nama' => 'Gilang Permana',
        'umur' => 24,
        'tinggi' => 172,
        'kelas' => 'E',
    ],
];

echo "<br>";

$hari = 'kamis';
switch ($hari) {
    case "senin":
        echo "hari ini adalah hari senin";
    case "selasa":
        echo "hari ini adalah hari selasa";
    default:
        echo "hari ini bukan hari senin ataupun selasa.";
};
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
                <th>Kelas</th>
                <th>Status KTP</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($peserta as $index => $p): ?>
            <tr>
                <td><?= $index + 1; ?></td>
                <td><?= $p['nama']; ?></td>
                <td><?= $p['umur']; ?></td>
                <td><?= $p['tinggi']; ?></td>
                <td>
                <?php
                switch ($p['kelas']) {
                    case 'A':
                        echo "Kelas Desain Grafis Madya";
                        break;
                    case 'B':
                        echo "Kelas Junior Web Developer";
                        break;
                    case 'C':
                        echo "Kelas Cyber Security";
                        break;
                    case 'D':
                        echo "Kelas Bahasa Inggris";
                        break;
                    default:
                        echo "Tidak ada kelas";
                }
                ?></td>
                
                <td>
                    <?php 
                    // if ($p['umur'] >= 17) {
                    //     echo "Boleh memiliki KTP";
                    // } else {
                    //     echo "Belum cukup umur";
                    // }

                    echo ($p['umur'] >= 17) ? 'Sudah memiliki KTP' : 'Belum memiliki KTP';

                    ?>
                </td>

            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>