<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM jadwal WHERE id=$id";

if (mysqli_query($conn, $query)) {
    header("Location: read.php");
} else {
    echo "Gagal hapus: " . mysqli_error($conn);
}
?>
