<?php
include 'koneksi.php';

$result = mysqli_query($conn, "SELECT * FROM jadwal");
?>

<h2>Data Jadwal Kereta</h2>
<a href="create.php">+ Tambah Data</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>asal</th>
        <th>Tujuan</th>
        <th>Jam Berangkat</th>
        <th>Jam Tiba</th>
        <th>Aksi</th>
    </tr>
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['nama_kereta'] ?></td>
        <td><?= $row['asal'] ?></td>
        <td><?= $row['tujuan'] ?></td>
        <td><?= $row['jam_berangkat'] ?></td>
        <td><?= $row['jam_tiba'] ?></td>
        <td>
            <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
            <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Hapus data?')">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>
