<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama_kereta'];
$asal = $_POST['asal'];
$tujuan = $_POST['tujuan'];
$berangkat = $_POST['jam_berangkat'];
$tiba = $_POST['jam_tiba'];

$query = "UPDATE jadwal SET nama_kereta='$nama', asal='$asal', tujuan='$tujuan',
          jam_berangkat='$berangkat', jam_tiba='$tiba' WHERE id=$id";

if (mysqli_query($conn, $query)) {
    header("Location: read.php");
} else {
    echo "Gagal update data: " . mysqli_error($conn);
}
?>
