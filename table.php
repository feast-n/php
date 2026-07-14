<?php
include 'koneksi.php';


$query = "SELECT * FROM peserta";
$result = mysqli_query($koneksi, $query);
?>
<div style="margin-bottom: 10px;">
    <a class="btn" href="9.php?tambah">Tambah Data</a>
</div>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Tinggi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Budi Santoso</td>
            <td>25</td>
            <td>170 cm</td>
        </tr>
    </tbody>
</table>