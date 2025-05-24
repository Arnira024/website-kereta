<?php
include 'koneksi.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM jadwal WHERE id=$id");
$data = mysqli_fetch_assoc($result);
?>

<h2>Edit Jadwal</h2>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">
    Nama Kereta: <input type="text" name="nama_kereta" value="<?= $data['nama_kereta'] ?>"><br>
    asal: <input type="text" name="asal" value="<?= $data['asal'] ?>"><br>
    Tujuan: <input type="text" name="tujuan" value="<?= $data['tujuan'] ?>"><br>
    Jam Berangkat: <input type="time" name="jam_berangkat" value="<?= $data['jam_berangkat'] ?>"><br>
    Jam Tiba: <input type="time" name="jam_tiba" value="<?= $data['jam_tiba'] ?>"><br>
    <input type="submit" value="Update">
</form>
