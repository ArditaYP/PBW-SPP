<?php
include("../koneksi.php");
$query = "SELECT * FROM kelas";
$result = mysqli_query($conn, $query);
$read = readdata($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Input Data</title>
</head>

<body>
    <center>
        <form method='POST' action="prosestambah.php">
            <input type="text" placeholder="Nisn" name="nisn"><br><br>
            <input type="text" placeholder="NIS" name="nis"><br><br>
            <select name="kelas" id="">
                <option value="" disabled selected>-- Pilih Kelas --</option>
                <?php foreach ($read as $r) : ?>
                    <option value="<?= $r['id_kelas'] ?>"><?= $r['nama_kelas'] ?></option>
                <?php endforeach; ?>
            </select><br><br>
            <input type="text" placeholder="Nama" name="nama"><br><br>
            <input type="text" placeholder="Alamat" name="alamat"><br><br>
            <input type="password" placeholder="Password" name="password"><br><br>
            <input type="text" placeholder="NO Telp" name="notelp"><br><br>
            <input class="tombol" type="submit" value="tambah">
        </form>
    </center>
</body>

</html>