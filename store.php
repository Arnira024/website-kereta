<?php
include 'koneksi.php';

$nama = $_POST['nama_kereta'];
$asal = $_POST['asal'];
$tujuan = $_POST['tujuan'];
$berangkat = $_POST['jam_berangkat'];
$tiba = $_POST['jam_tiba'];

$query = "INSERT INTO jadwal (nama_kereta, asal, tujuan, jam_berangkat, jam_tiba)
          VALUES ('$nama', '$awal', '$tujuan', '$berangkat', '$tiba')";

if (mysqli_query($conn, $query)) {
    header("Location: read.php");
} else {
    echo "Gagal tambah data: " . mysqli_error($conn);
}
?>
