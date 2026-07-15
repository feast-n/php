<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $tinggi = $_POST['tinggi'];

    $id = isset($_GET['edit']) ? $_GET['id'] : null;
    if ($id) {
        $update = mysqli_query($koneksi, "UPDATE peserta SET nama = '$nama', umur = '$umur', tinggi = '$tinggi' WHERE id = '$id'");
    } else {
        $insert = mysqli_query($koneksi, "INSERT INTO peserta (nama, umur, tinggi) VALUES ('$nama', '$umur', '$tinggi')");
    }
    
    header("Location: 9.php");
    exit();
}

$id_edit = $_GET['id'] ?? null;
$row = [];

if ($id_edit) {
    $query = mysqli_query($koneksi, "SELECT * FROM peserta WHERE id = '$id_edit'");
    $row = mysqli_fetch_assoc($query) ?: [];
}
?>

<form action="" method="POST" style="margin-top: 20px;">
    <input type="hidden" name="id" value="<?= $row['id'] ?? '' ?>">

    <div class="form-group">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?= htmlspecialchars($row['nama'] ?? '') ?>" required>
    </div>
    <div class="form-group">
        <label>Umur:</label>
        <input type="number" name="umur" value="<?= htmlspecialchars($row['umur'] ?? '') ?>" required>
    </div>
    <div class="form-group">
        <label>Tinggi (cm):</label>
        <input type="number" name="tinggi" value="<?= htmlspecialchars($row['tinggi'] ?? '') ?>" required>
    </div>
    <button type="submit" name="submit" class="btn btn-tambah">Simpan</button>
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