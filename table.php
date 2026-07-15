<?php
include 'koneksi.php';

if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($koneksi, "DELETE FROM peserta WHERE id = '$id'");
    header('Location: 9.php?hapus=berhasil');
    exit();
}

$result = mysqli_query($koneksi, "SELECT * FROM peserta");
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<div style="margin-bottom: 10px;">
    <a class="btn btn-tambah" href="9.php?tambah">Tambah Data</a>
</div>
<table>
    <thead>
        <tr>
            <th>No</th> <th>Nama</th> <th>Umur</th> <th>Tinggi</th> <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if (empty($rows)): ?>
            <tr>
                <td colspan="5" style="text-align: center;">Belum ada data peserta.</td>
            </tr>
        <?php else: ?>
            <?php foreach($rows as $index => $row): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= htmlspecialchars($row['nama']) ?></td>
                    <td><?= htmlspecialchars($row['umur']) ?> tahun</td>
                    <td><?= htmlspecialchars($row['tinggi']) ?> cm</td>
                    <td>
                        <a class="btn btn-edit" href="9.php?edit=1&id=<?= $row['id'] ?>">Edit</a>
                        <a class="btn btn-delete" href="table.php?delete=<?= $row['id'] ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>