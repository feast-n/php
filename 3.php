<?php

header("Refresh: 0.5");

$buah = array("apel", "jeruk", "mangga","pisang");
$buah = ["apel", "jeruk", "mangga","pisang"];

echo $buah[1];

foreach($buah as $index=> $b){
    echo "<br>";
    echo $b;
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$siswa = [
    "nama" => "Pandu Fawaz Rabbani",
    "umur" => 21,
    "tinggi" => 173,
    "alamat" => "Jl. Mangga besar",
];

echo "Nama saya adalah " . $siswa['nama'];
echo " umur saya adalah " .$siswa['umur'] . " tahun.";

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

echo "<br>" . "Peserta 1 bernama " . $peserta[0]['nama']." dengan umur ". $peserta[0]['umur'];

foreach($peserta as $index => $value){
    echo "<br>";
    echo "Peserta ke-" . ($index + 1) . " : ". $value['nama']. " dengan umur ". $value['umur'];
};