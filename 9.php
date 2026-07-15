<?php
include 'koneksi.php';

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    if (mysqli_query($koneksi, "DELETE FROM peserta WHERE id = '$id'")) {
        header("Location: 9.php");
        exit();
    } else {
        echo "Gagal menghapus data: " . mysqli_error($koneksi);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peserta</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 60%; margin-top: 20px; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .btn { color: white; padding: 6px 12px; text-decoration: none; border-radius: 4px; font-size: 13px; font-weight: bold; transition: background-color 0.3s ease; display: inline-block; border: none; cursor: pointer; }
        .btn-tambah { background-color: tomato; }
        .btn-tambah:hover { background-color: darkred; }
        .btn-edit { background-color: orange; color: black; }
        .btn-edit:hover { background-color: darkorange; }
        .btn-delete { background-color: crimson; }
        .btn-delete:hover { background-color: darkred; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; }
        .form-group input { padding: 8px; width: 250px; }
    </style>
</head>
<body>

    <?php if(isset($_GET['tambah'])): ?>
        <h1>Tambah Data Peserta</h1>
        <?php include 'form.php'; ?>
    <?php elseif(isset($_GET['edit'])): ?>
        <h1>Edit Data Peserta</h1>
        <?php include 'form.php'; ?>
    <?php else: ?>
        <h1>Data Peserta</h1>
        <?php include 'table.php'; ?>
    <?php endif;?>

</body>
</html>