<?php
include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $tinggi = $_POST['tinggi'];

    // $peserta[] = [
    //     'nama' => $nama,
    //     'umur' => $umur,
    //     'tinggi' => $tinggi
    // ];
    $insert = mysqli_query($koneksi, "INSERT INTO peserta (nama, umur, tinggi) VALUES ('$nama', '$umur', '$tinggi')");
    header("Location: 9.php");

    // echo "<strong>Data Berhasil Disimpan:</strong><br>";
    // echo "Nama: " . $peserta[0]['nama'] . "<br>";
    // echo "Umur: " . $peserta[0]['umur'] . " tahun<br>";
    // echo "Tinggi: " . $peserta[0]['tinggi'] . " cm<br><br>";
}
?>

<form action="" method="POST" style="margin-top: 20px;">
    <div class="form-group">
        <label>Nama:</label>
        <input type="text" name="nama" required>
    </div>
    <div class="form-group">
        <label>Umur:</label>
        <input type="number" name="umur" required>
    </div>
    <div class="form-group">
        <label>Tinggi (cm):</label>
        <input type="number" name="tinggi" required>
    </div>
    <button type="submit" name="submit" class="btn">Simpan</button>
    <a class="btn" style="background-color: #666;" href="9.php">Kembali</a>
</form>

<!-- 
SQL: structure query language, digunakan untuk mengelola dan memanipulasi basis data relasional.
DDL: Data Definition Language, digunakan untuk mendefinisikan struktur basis data, seperti membuat tabel, mengubah tabel, dan menghapus tabel.
DML: Data Manipulation Language, digunakan untuk memanipulasi data dalam tabel, seperti menambahkan, mengupdate, dan menghapus data.
    -insert: digunakan untuk menambahkan data baru ke dalam tabel.
    -update: digunakan untuk memperbarui data yang sudah ada dalam tabel.
    -select: digunakan untuk mengambil data dari tabel.
    -delete: digunakan untuk menghapus data dari tabel.
 -->