<!DOCTYPE html>
<html>
<head><title>Tambah Jadwal</title></head>
<body>
    <h2>Tambah Jadwal Kereta</h2>
    <form action="store.php" method="post">
        Nama Kereta: <input type="text" name="nama_kereta"><br>
        asal: <input type="text" name="asal"><br>
        Tujuan: <input type="text" name="tujuan"><br>
        Jam Berangkat: <input type="time" name="jam_berangkat"><br>
        Jam Tiba: <input type="time" name="jam_tiba"><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
